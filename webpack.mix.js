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
    .sass('resources/sass/partials/hero-banner.scss', 'public/css/partials')
    .sass('resources/sass/partials/navbar.scss', 'public/css/partials')
    .sass('resources/sass/partials/footer.scss', 'public/css/partials')
    .sass('resources/sass/pages/home-page/style.scss', 'public/css/pages/home-page')
    .sass('resources/sass/pages/about-us-page/style.scss', 'public/css/pages/about-us-page')
    .sourceMaps();
