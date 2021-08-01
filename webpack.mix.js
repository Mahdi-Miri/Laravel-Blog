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

mix.styles([
    'resources/css/bootstrap.css',
    'resources/css/bootstrap.rtl.css',
    'resources/css/bootstrap-grid.css',
    'resources/css/bootstrap-grid.rtl.css',
    'resources/css/bootstrap-reboot.css',
    'resources/css/bootstrap-reboot.rtl.css',
    'resources/css/bootstrap-utilities.css',
    'resources/css/bootstrap-utilities.rtl.css'
],'public/css/app.css');

mix.scripts([
    'resources/js/bootstrap.js',
    'resources/js/bootstrap.bundle.js',
    'resources/js/bootstrap.esm.js',
    'resources/js/jquery-3.6.0.min.js'
], 'public/js/app.js');
