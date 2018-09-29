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

mix.copy('node_modules/@fortawesome/fontawesome-pro/webfonts','public/fonts/vendor/fontawesome-pro/')
    .copy('node_modules/@fortawesome/fontawesome-pro/scss','resources/assets/sass/fontawesome-pro/')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .babel(['resources/assets/js/navigation.js'], 'public/js/scripts.js')
    .version();
