let mix = require('laravel-mix');
let CleanWebpackPlugin = require('clean-webpack-plugin');

// paths to clean
let pathsToClean = [
    'public/assets/app/js',
    'public/assets/app/css',
    'public/assets/admin/js',
    'public/assets/admin/css',
    'public/assets/auth/css',
];

// the clean options to use
let cleanOptions = {};

mix.webpackConfig({
    plugins: [
        new CleanWebpackPlugin(pathsToClean, cleanOptions)
    ]
});

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

/*
 |--------------------------------------------------------------------------
 | Core
 |--------------------------------------------------------------------------
 |
 */

mix.scripts([
    'node_modules/gentelella/vendors/jquery/dist/jquery.js',
], 'public/assets/app/js/app.js').version();

mix.styles([
    'node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css',
], 'public/assets/app/css/app.css').version();

mix.copy([
    'node_modules/gentelella/vendors/font-awesome/fonts/',
], 'public/assets/app/fonts');


mix.copy([
    'node_modules/gentelella/production/images',
], 'public/images');

/*
 |--------------------------------------------------------------------------
 | Admin Add Query
 |--------------------------------------------------------------------------
 |
 */

mix.styles([
    'node_modules/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
], 'public/assets/app/css/bootstrap-datetimepicker.css').version();

mix.scripts([
    'node_modules/gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
], 'public/assets/app/js/bootstrap-datetimepicker.js').version();

/*
 |--------------------------------------------------------------------------
 | Admin
 |--------------------------------------------------------------------------
 |
 */

mix.scripts([
    'node_modules/gentelella/vendors/echarts/dist/echarts.min.js',
], 'public/assets/app/js/echarts.js').version();

mix.scripts([
    'node_modules/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js',
], 'public/assets/app/js/forms.js').version();


mix.scripts([
    'node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.js',
    'node_modules/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
    'node_modules/gentelella/vendors/fastclick/lib/fastclick.js',
    'node_modules/gentelella/vendors/nprogress/nprogress.js',
    'node_modules/gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js',
    'node_modules/gentelella/vendors/raphael/raphael.min.js',
    'node_modules/gentelella/vendors/morris.js/morris.min.js',
    'node_modules/gentelella/vendors/gauge.js/dist/gauge.min.js',
    'node_modules/gentelella/vendors/skycons/skycons.js',
    // 'node_modules/gentelella/build/js/custom.js',
], 'public/assets/admin/js/admin.js').version();

mix.styles([
    'node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.css',
    'node_modules/gentelella/vendors/vendors/nprogress/nprogress.css',
    'node_modules/gentelella/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
    'node_modules/gentelella/build/css/custom.css',
], 'public/assets/admin/css/admin.css').version();


mix.copy([
    'node_modules/gentelella/vendors/bootstrap/dist/fonts',
], 'public/assets/admin/fonts');


// mix.scripts([
//     'node_modules/select2/dist/js/select2.full.js',
//     'resources/assets/admin/js/users/edit.js',
// ], 'public/assets/admin/js/users/edit.js').version();
//
// mix.styles([
//     'node_modules/select2/dist/css/select2.css',
// ], 'public/assets/admin/css/users/edit.css').version();

mix.scripts([
    'node_modules/gentelella/vendors/Flot/jquery.flot.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.time.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.pie.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.stack.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.resize.js',

    'node_modules/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js',
    'node_modules/gentelella/vendors/DateJS/build/date.js',
    'node_modules/gentelella/vendors/flot.curvedlines/curvedLines.js',
    'node_modules/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js',

    'node_modules/gentelella/production/js/moment/moment.min.js',
    'node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js',
    'node_modules/gentelella/vendors/Chart.js/dist/Chart.js',
    'resources/assets/admin/js/dashboard.js',
], 'public/assets/admin/js/dashboard.js').version();

mix.styles([
    'node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css',
    'resources/assets/admin/css/dashboard.css',
], 'public/assets/admin/css/dashboard.css').version();


/*
 |--------------------------------------------------------------------------
 | Auth
 |--------------------------------------------------------------------------
 |
 */

mix.styles('resources/assets/auth/css/login.css', 'public/assets/auth/css/login.css').version();
mix.styles('resources/assets/auth/css/register.css', 'public/assets/auth/css/register.css').version();
mix.styles('resources/assets/auth/css/passwords.css', 'public/assets/auth/css/passwords.css').version();

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/gentelella/vendors/animate.css/animate.css',
    'node_modules/gentelella/build/css/custom.css',
], 'public/assets/auth/css/auth.css').version();