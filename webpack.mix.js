let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets/js')
    .vue({ version: 2 })
    .sass('resources/sass/app.scss', 'public/assets/css');
