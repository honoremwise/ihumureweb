const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles('resources/css/gteditor.css', 'public/css/gteditor.css')
   .scripts('resources/js/gteditor.js', 'public/js/gteditor.js');
