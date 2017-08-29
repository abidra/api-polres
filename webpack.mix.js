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

mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/popper.js/index.js',
	'bower_components/bootstrap/dist/js/bootstrap.min.js',
	'bower_components/pace/pace.min.js'
], 'public/js/all.js');