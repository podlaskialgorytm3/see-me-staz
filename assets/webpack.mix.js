let mix = require('laravel-mix');

mix.js('src/js/index.js', 'dist').sass('src/sass/main.sass', 'dist');
