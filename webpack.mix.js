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



mix.styles([
    'node_modules/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
    'node_modules/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css',
    'node_modules/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css',
    'node_modules/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css',
    'node_modules/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css',
], 'public/assets/app/css/data-table.css').version();

mix.scripts([
    'node_modules/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js',
    'node_modules/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js',
    'node_modules/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js',
    'node_modules/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js',
    'node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js',
    'node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js',
    'node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js',
    'node_modules/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
    'node_modules/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js',
    'node_modules/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js',
    'node_modules/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js',
    'node_modules/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js',
], 'public/assets/app/js/data-table.js').version();


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
    'node_modules/gentelella/vendors/switchery/dist/switchery.min.js',
], 'public/assets/app/js/forms.js').version();
mix.styles('node_modules/gentelella/vendors/switchery/dist/switchery.min.css', 'public/assets/admin/css/form.css').version();

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

/** Sweet alert 2 modal js library */
mix.scripts([
    'node_modules/sweetalert2/dist/sweetalert2.all.min.js',
], 'public/assets/admin/js/sweetalert2.min.js').version();

/**
 *  Select 2
 */
mix.scripts([
    'node_modules/gentelella/vendors/select2/dist/js/select2.full.js',
], 'public/assets/admin/js/select2.js').version();

mix.styles([
    'node_modules/gentelella/vendors/select2/dist/css/select2.css',
], 'public/assets/admin/css/select2.css').version();

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


mix.scripts([
    'resources/assets/admin/js/custom.js',
], 'public/assets/admin/js/custom.js').version();

mix.scripts([
    'resources/assets/admin/js/form.js',
], 'public/assets/admin/js/form.js').version();

mix.scripts([
    'resources/assets/admin/js/maps.js',
], 'public/assets/admin/js/maps.js').version();


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
