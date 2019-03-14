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
   .sass('resources/sass/app.scss', 'public/css');

   const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
 
   module.exports = {
     // ...
     plugins: [
       new BrowserSyncPlugin({
         // browse to http://localhost:3000/ during development,
         // ./public directory is being served
         host: 'localhost',
         port: 8080,
         server: { baseDir: ['public'] }
       })
     ]
   }