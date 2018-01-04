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

mix.scripts([
    'public/assets/js/popper.js',
    'public/assets/js/moment.min.js',
    'public/assets/js/bootstrap.min.js',
    'public/assets/js/jquery-ui-1.12.1.custom.min.js',
    'public/assets/js/bootstrap-switch.min.js',
    'public/assets/js/bootstrap-datetimepicker.min.js',
    'public/assets/js/nouislider.js',
    'public/assets/js/paper-kit.js',

], 'public/js/all.js');

mix.styles([
    'public/assets/css/bootstrap.min.css',
    'public/assets/css/nucleo-icons.css',
    'public/assets/css/paper-kit.css',
    'public/assets/css/apaa.css',
], 'public/css/all.css');
