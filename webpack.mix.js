const { mix } = require('laravel-mix');
var bowerDir = 'resources/assets/bower_components';
var cssDir = 'public/css';
var fontDir = 'public/fonts';
var jsDir = 'public/js';

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

mix.js('resources/assets/js/app.js', jsDir)
   .sass('resources/assets/sass/app.scss', cssDir)
   .js(bowerDir + '/jquery/dist/jquery.min.js', jsDir)
   .js(bowerDir + '/materialize/dist/js/materialize.min.js', jsDir);
