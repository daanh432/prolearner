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

mix.js('resources/js/app.js', 'public/assets/js')
    .js('resources/js/libraries/parallax.js', 'public/assets/js')
    .js('resources/js/liveEditor.js', 'public/assets/js')
    .js('resources/js/coursesSearch.js', 'public/assets/js');

mix.sass('resources/sass/app.scss', 'public/assets/css')
    .sass('resources/sass/liveEditor.scss', 'public/assets/css').options({
    postCss: [
        require('autoprefixer')({
            grid: "autoplace"
        })
    ]
});

if (mix.inProduction()) {
    mix.version();
}
