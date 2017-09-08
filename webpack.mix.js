let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles('resources/assets/fonts/font-awesome/css/font-awesome.min.css', 'public/css/fonts.css');

mix.js([
    'resources/assets/js/material-theme/chartist.min.js',
    'resources/assets/js/material-theme/bootstrap-notify.js'
], 'public/js/plugins.min.js');

mix.js([
    'resources/assets/js/material-theme/material.min.js',
    'resources/assets/js/material-theme/material-dashboard.js'
], 'public/js/material.min.js');
