const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.styles([
    'resources/css/animate.css',
    'resources/css/app.css',
    'resources/css/bootstrap.css',
    'resources/css/bootstrap-grid.css',
    'resources/css/bootstrap-reboot.css',
    'resources/css/carousel.css',
    'resources/css/colors.css',
    'resources/css/font-awesome.css',
    'resources/css/responsive.css',
    'resources/css/style.css',



],'public/css/app.css');
