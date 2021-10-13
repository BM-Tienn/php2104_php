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

mix.copyDirectory('resources/assets/css','public/assets/css');
mix.copyDirectory('resources/assets/fonts','public/assets/fonts');
mix.copyDirectory('resources/assets/images','public/assets/images');
mix.copyDirectory('resources/assets/js','public/assets/js');
mix.copyDirectory('resources/assets/vendor','public/assets/vendor');
