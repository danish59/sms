const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .webpack('app.js');

    mix.styles([
        'admin-css-assets/pages/advanced_charts.css',
        'admin-css-assets/pages/advanced_components.css',
        'admin-css-assets/pages/animations.css',
        'admin-css-assets/pages/buttons.css',
        'admin-css-assets/pages/calendar_custom.css',
        'admin-css-assets/pages/chartist.css',
        'admin-css-assets/pages/colorpicker_hack.css',
        'admin-css-assets/pages/cropper.css',
        'admin-css-assets/pages/dataTables.bootstrap.css',
        'admin-css-assets/pages/flot_charts.css',
        'admin-css-assets/pages/form_elements.css',
        'admin-css-assets/pages/form_layouts.css',
        'admin-css-assets/pages/form_validations.css',
        'admin-css-assets/pages/gallery.css',
        'admin-css-assets/pages/general_components.css',
        'admin-css-assets/pages/icon.css',
        'admin-css-assets/pages/index.css',
        'admin-css-assets/pages/invoice.css',
        'admin-css-assets/pages/lockscreen.css',
        'admin-css-assets/pages/lockscreen2.css',
        'admin-css-assets/pages/login1.css',
        'admin-css-assets/pages/login2.css',
        'admin-css-assets/pages/login3.css',
        'admin-css-assets/pages/mail_box.css',
        'admin-css-assets/pages/maps.css',
        'admin-css-assets/pages/new_dashboard.css',
        'admin-css-assets/pages/p_notify.css',
        'admin-css-assets/pages/portlet.css',
        'admin-css-assets/pages/profile.css',
        'admin-css-assets/pages/radio_checkbox.css',
        'admin-css-assets/pages/ratings.css',
        'admin-css-assets/pages/rickshaw.css',
        'admin-css-assets/pages/slider_ion.css',
        'admin-css-assets/pages/sortable.css',
        'admin-css-assets/pages/sweet_alert.css',
        'admin-css-assets/pages/tables.css',
        'admin-css-assets/pages/timeline2.css',
        'admin-css-assets/pages/toastr.css',
        'admin-css-assets/pages/transitions.css',
        'admin-css-assets/pages/widgets.css',
        'admin-css-assets/pages/wizards.css'

    ],'public/css/admin-css/admin.css');

    mix.scripts([
        'admin-js-assets/pages/advanced_charts.js',
        'admin-js-assets/pages/advanced_tables.js',
        'admin-js-assets/pages/calendar.js',
        'admin-js-assets/pages/cards.js',
        'admin-js-assets/pages/chartist.js',
        'admin-js-assets/pages/cropper.js',
        'admin-js-assets/pages/datatable.js',
        'admin-js-assets/pages/datetime_piker.js',
        'admin-js-assets/pages/flot_charts.js',
        'admin-js-assets/pages/forgot_password.js',
        'admin-js-assets/pages/form_editors.js',
        'admin-js-assets/pages/form_elements.js',
        'admin-js-assets/pages/form_layouts.js',
        'admin-js-assets/pages/form_validation.js',
        'admin-js-assets/pages/gallery.js',
        'admin-js-assets/pages/icons.js',
        'admin-js-assets/pages/index.js',
        'admin-js-assets/pages/izi_toastr.js',
        'admin-js-assets/pages/jqvmaps.js',
        'admin-js-assets/pages/lockscreen.js',
        'admin-js-assets/pages/lockscreen2.js',
        'admin-js-assets/pages/lockscreen3.js',
        'admin-js-assets/pages/login1.js',
        'admin-js-assets/pages/login2.js',
        'admin-js-assets/pages/login3.js',
        'admin-js-assets/pages/mail_box.js',
        'admin-js-assets/pages/mail_sent.js',
        'admin-js-assets/pages/maps_page.js',
        'admin-js-assets/pages/mini_calendar.js',
        'admin-js-assets/pages/modals.js',
        'admin-js-assets/pages/new_dashboard.js',
        'admin-js-assets/pages/p_notify.js',
        'admin-js-assets/pages/radio_checkbox.js',
        'admin-js-assets/pages/ratings.js',
        'admin-js-assets/pages/register.js',
        'admin-js-assets/pages/richshaw_chart.js',
        'admin-js-assets/pages/simple_datatables.js',
        'admin-js-assets/pages/sliders.js',
        'admin-js-assets/pages/sortable.js',
        'admin-js-assets/pages/sweet_alerts.js',
        'admin-js-assets/pages/toastr_notifications.js',
        'admin-js-assets/pages/transitions-sliders.js',
        'admin-js-assets/pages/users.js',
        'admin-js-assets/pages/validation.js',
        'admin-js-assets/pages/widget1.js',
        'admin-js-assets/pages/widget2.js',
        'admin-js-assets/pages/widget3.js',
        'admin-js-assets/pages/wizard.js',
        'admin-js-assets/pluginjs/calendarcustom.js',
        'admin-js-assets/pluginjs/chartist-tooltip.js',
        'admin-js-assets/pluginjs/dataTables.tableTools.js',
        'admin-js-assets/pluginjs/jasny-bootstrap.js',
        'admin-js-assets/pluginjs/jquery.sparkline.js',
        'admin-js-assets/pluginjs/sample_data.js'
    ], 'public/js/admin-js/admin.js');
});


// // gulpfile.js
//
// var elixir = require('laravel-elixir');
//
// require('laravel-elixir-vueify');
//
// elixir(function(mix) {
//     mix.browserify('app.js');
// });