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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.copyDirectory('resources/views/vegefoods/css', 'public/vegefoods/css');
mix.copyDirectory('resources/views/vegefoods/js', 'public/vegefoods/js');
mix.copyDirectory('resources/views/vegefoods/fonts', 'public/vegefoods/fonts');
mix.copyDirectory('resources/views/vegefoods/scss', 'public/vegefoods/scss');

mix.copyDirectory('vendor/almasaeed2010/adminlte', 'public/themes/adminlte');