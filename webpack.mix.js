const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//const WebpackShellPluginNext = require('webpack-shell-plugin-next');

/*mix.webpackConfig({
    plugins:
        [
            new WebpackShellPluginNext({
                onBuildStart:{
                    scripts: ['php artisan lang:js resources/js/vue-translations.js --no-lib --quiet']
                },
                onBuildEnd:[]
            })
        ]
});*/

mix.js('resources/js/app.js', 'public/js').vue().
    postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]
);
