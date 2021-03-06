const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 | https://github.com/laravel/laravel
 */

mix.options({
	processCssUrls: false
})
	.js('src/js/app.js', './')
    .sass('src/sass/app.scss', './');
