const mix = require('laravel-mix');

mix
    .setPublicPath('./public/')
    .js('resources/js/app.js', 'js')
    .js('resources/js/scripts.js', 'js')
    .js('resources/js/service-worker.js', 'js/sw.js')
    .sass('resources/sass/app.scss', 'css')
    .version()
    //.sourceMaps()
    .browserSync(); // Hot reloading