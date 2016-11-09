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
    mix.styles([
        'bootstrap-3.3.6/bootstrap.min.css',
        'font-awesome/font-awesome.min.css',
        'ionicons/ionicons.min.css',
        'adminLTE-2.3.4/AdminLTE.min.css',
        'adminLTE-2.3.4/skins/skin-green.min.css',
    ]);
    mix.version(['css/all.css']);
});
