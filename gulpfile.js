var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';
elixir.config.sourcemaps = true;

var publicPath = '../../public';
var themePath = publicPath + '/Themes/Rubber';
var cssPath = themePath + '/css';
var jsPath =  themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function(path) {
    new Task('del', function() {
        return del(path, {force:true});
    });
});

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

    mix.del(['assets/css', 'assets/js']);
    mix.del(themePath+'/**');

    mix.sass('style-core.scss', 'resources/assets/css/style-core.css');

    mix.styles([
        'style-core.css'
    ], 'resources/assets/css/style-core.min.css');

    mix.copy('resources/assets', 'assets')
        .copy('resources/plugins', 'assets/plugins');

    mix.version([
        'css/style-core.min.css'
    ], 'assets');

    mix.stylistPublish();

});