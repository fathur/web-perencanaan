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
//  .copy('node_modules/@fortawesome/fontawesome-pro/scss','resources/assets/sass/fontawesome-pro/')
//
mix.copy('node_modules/@fortawesome/fontawesome-pro/webfonts', 'resources/assets/fonts/')
    .copy('bower_components/fullcalendar/dist','public/vendor/fullcalendar')
    .copy('bower_components/moment/min','public/vendor/moment')
    .copy('bower_components/jquery/dist','public/vendor/jquery')
    .copy('bower_components/fullpage.js/dist','public/vendor/fullpage.js')
    .copy('bower_components/particles.js/particles.min.js','public/vendor/particle.js/particles.min.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .babel([
        'resources/assets/js/navigation.js',
        'resources/assets/js/posts.js'
    ], 'public/js/scripts.js')
    .version();
