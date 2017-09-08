<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProvidersController extends Controller
{
    protected $redirectTo = User::AUTH_REDIRECT;

    /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }

        // Generate random nickname based on the user's email
        if(!isset($user->nickname) || is_null($user->nickname)) {
            $base = strtok($user->email, '@');

            if(User::where("nickname", $base)->exists()) {
                do {
                    $nickname = $base.rand(1, 20);
                } while (User::where("nickname", $nickname)->exists());
            } else {
                $nickname = $base;
            }

            $user->nickname = $nickname;
        }

        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'nickname'    => $user->nickname,
            'avatar'    => $user->avatar,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }
}

