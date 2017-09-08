@extends('layouts.material-home')

@push('styles')
    <style>
        .input-group .form-control {
            margin-left: 6%;
            width: 94%;
        }
    </style>
@endpush

@section('content')
<div class="signup-page">
    @include('layouts.pieces.topbar-home')
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('{{ asset('img/pexels-photo-450035.jpeg') }}'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="header header-success text-center">
                                    <h4>Sign Up</h4>
                                    <div class="social-line">
                                        <a href="{{ route('provider', 'facebook') }}" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="{{ route('provider', 'google') }}" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-divider">Or use your credentials</p>
                                <div class="content">

                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
                                        <div class="form-group label-floating {{ $errors->has('email') ? ' has-error' : 'has-success' }}">
                                            @if ($errors->has('email'))
                                            <label class="control-label">{{ $errors->first('email') }}</label>
                                            @endif
                                            <input id="credential" placeholder="Use your email or nickname" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                        <div class="form-group label-floating {{ $errors->has('password') ? ' has-error' : 'has-success' }}">
                                            <input id="password" placeholder="Type a strong password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" checked>
                                            Keep me logged
                                        </label>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-simple btn-success btn-lg">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.pieces.footer-home')

        </div>
    </div>
</div>
@endsection