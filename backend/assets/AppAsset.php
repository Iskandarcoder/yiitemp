<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/global/plugins/font-awesome/css/font-awesome.min.css',
        'css/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'css/global/plugins/bootstrap/css/bootstrap.min.css',
        'css/global/plugins/uniform/css/uniform.default.css',
        'css/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'css/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'css/global/plugins/fullcalendar/fullcalendar.min.css',
        'css/global/plugins/jqvmap/jqvmap/jqvmap.css',
        'js/admin/pages/css/tasks.css',
        'css/global/css/components-md.css',
        'css/global/css/plugins-md.css',
        'css/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'js/admin/layout/css/layout.css',
        'js/admin/layout/css/themes/blue.css',
        'js/admin/layout/css/custom.css',

    ];
    public $js = [
        //'css/global/plugins/jquery.min.js',
        'css/global/plugins/jquery-migrate.min.js',
        'css/global/plugins/jquery-ui/jquery-ui.min.js',
        'css/global/plugins/bootstrap/js/bootstrap.min.js',
        'css/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'css/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'css/global/plugins/jquery.blockui.min.js',
        'css/global/plugins/jquery.cokie.min.js',
        'css/global/plugins/uniform/jquery.uniform.min.js',
        'css/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'css/global/plugins/jqvmap/jqvmap/jquery.vmap.js',
        'css/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'css/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'css/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'css/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'css/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'css/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        'css/global/plugins/flot/jquery.flot.min.js',
        'css/global/plugins/flot/jquery.flot.resize.min.js',
        'css/global/plugins/flot/jquery.flot.categories.min.js',
        'css/global/plugins/jquery.pulsate.min.js',
        'css/global/plugins/bootstrap-daterangepicker/moment.min.js',
        'css/global/plugins/bootstrap-daterangepicker/daterangepicker.js',
        'css/global/plugins/fullcalendar/fullcalendar.min.js',
        'css/global/plugins/jquery-easypiechart/jquery.easypiechart.js',
        'css/global/plugins/jquery.sparkline.min.js',
        'css/global/scripts/metronic.js',
        'css/global/plugins/bootstrap-daterangepicker/daterangepicker.js',
        'js/admin/layout/scripts/layout.js',
        'js/admin/layout/scripts/quick-sidebar.js',
        'js/admin/layout/scripts/demo.js',
        'js/admin/pages/scripts/index.js',
        'js/admin/pages/scripts/tasks.js',
        'js/jquery.input.js',
        //'js/consul.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
