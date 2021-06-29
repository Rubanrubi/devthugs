const mix = require('laravel-mix');
require('laravel-mix-purgecss');
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

// Template Js
mix.scripts([
    'resources/assets/js/app.js',
    'resources/assets/js/core.js'], 'public/assets/js/all.js')
    .sourceMaps()

    // Template Css
    mix.styles([
        'resources/assets/css/app.css',
        'resources/assets/css/core.css'
    ], 'public/assets/css/all.css')

    // Demo images
    .copy('resources/assets/img/','public/assets/img/')

    // Template fonts
    .copy('resources/assets/fonts/','public/assets/fonts/')

if (mix.inProduction()) {
    mix.version()
   .purgeCss();
}


