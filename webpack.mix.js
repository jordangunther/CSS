const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/welcome.scss', 'public/css/welcome')
    .sass('resources/sass/natours.scss', 'public/css/natours')
    .sass('resources/sass/trillo.scss', 'public/css/trillo')
    .sass('resources/sass/nexter.scss', 'public/css/nexter')
    .extract()
    .version();
