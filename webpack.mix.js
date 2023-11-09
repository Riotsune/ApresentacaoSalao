const mix = require('laravel-mix');

mix
    .sass('resources/css/app.scss', 'public/css')

mix.webpackConfig({
    plugins: [
        // ...
    ],
    resolve: {
    // ...
    },
    stats: {
         children: true
    }
});