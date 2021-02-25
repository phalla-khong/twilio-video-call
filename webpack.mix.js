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

mix.js('resources/js/app.js', 'public/js')
.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

// for Vue
mix.js('resources/js/vue_app.js', 'public/js');

// mix.combine([
//     'path/to/dir/*.css',
//     'path/to/second/dir/*.css'
// ], 'all-files.css');

mix.copy('resources/assets/api_doc', 'public/api_doc');
