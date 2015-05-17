var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

 //Compile Without Source Maps
elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass('app.scss')
    .scripts([
    	"libs/jquery.js",
    	"libs/angular-min.js",
    	"app.js",
    	"app/*js",
    	"bootstrap-sprockets.js"
    	], "public/js/app.js")
    .version(['css/app.css', 'js/app.js']);
});
