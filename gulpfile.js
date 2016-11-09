var elixir = require('laravel-elixir');

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
    mix.scripts([
        'html5shiv/html5shiv.min.js',
        'respond/respond.min.js',
        'jQuery/jquery-2.2.3.min.js',
        'jQuery/jquery-ui.min.js',
        'bootstrap-3.3.6/bootstrap.min.js',
        'adminLTE-2.3.4/app.min.js',
    ])
    mix.version(['js/all.js']);
});
