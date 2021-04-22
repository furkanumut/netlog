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

mix.copyDirectory('node_modules/tinymce/plugins', 'public/assets/tinymce/plugins');
mix.copyDirectory('node_modules/tinymce/skins', 'public/assets/tinymce/skins');
mix.copyDirectory('node_modules/tinymce/themes', 'public/assets/tinymce/themes');
mix.copy('node_modules/tinymce/jquery.tinymce.js', 'public/assets/tinymce/jquery.tinymce.js');
mix.copy('node_modules/tinymce/jquery.tinymce.min.js', 'public/assets/tinymce/jquery.tinymce.min.js');
mix.copy('node_modules/tinymce/tinymce.js', 'public/assets/tinymce/tinymce.js');
mix.copy('node_modules/tinymce/tinymce.min.js', 'public/assets/tinymce/tinymce.min.js');
