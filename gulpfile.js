var elixir = require('laravel-elixir');

elixir.config.js.browserify.transformers.push({ name: 'browserify-shim', options: {}});

require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.copy('node_modules/materialize-css/fonts', 'public/build/fonts');
	mix.copy('resources/assets/config', 'public/build/config');
    mix.sass('app.scss');
    mix.browserify('app.js');
    mix.version(['css/app.css', 'js/app.js']);
 
});
