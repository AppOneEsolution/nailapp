<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'themes/nailapp/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap2/bootstrap-switch.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css',
        'themes/nailapp/assets/global/plugins/morris/morris.css',
        'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css',
        'themes/nailapp/assets/global/plugins/jqvmap/jqvmap/jqvmap.css',
        'themes/nailapp/css/components.min.css',
        'themes/nailapp/css/plugins.min.css',
        'themes/nailapp/assets/layouts/layout/css/layout.min.css',
        'themes/nailapp/assets/layouts/layout/css/themes/darkblue.min.css',
        'themes/nailapp/assets/layouts/layout/css/custom.min.css',
    ];
    public $js = [
        'themes/nailapp/assets/global/plugins/jquery.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'themes/nailapp/assets/global/plugins/js.cookie.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js',
        'themes/nailapp/assets/global/plugins/moment.min.js',
        'themes/nailapp/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
        'themes/nailapp/assets/global/plugins/morris/morris.min.js',
        'themes/nailapp/assets/global/plugins/morris/raphael-min.js',
        'themes/nailapp/assets/global/plugins/counterup/jquery.waypoints.min.js',
        'themes/nailapp/assets/global/plugins/counterup/jquery.counterup.min.js',
        'themes/nailapp/assets/global/plugins/amcharts/amcharts/amcharts.js',
        'themes/nailapp/assets/global/plugins/amcharts/amcharts/serial.js',
        'themes/nailapp/assets/global/plugins/amcharts/amcharts/pie.js',
        'themes/nailapp/assets/global/plugins/amcharts/amcharts/radar.js',
        'themes/nailapp/assets/global/plugins/amcharts/amcharts/themes/light.js',
        'themes/nailapp/assets/global/plugins/amcharts/amcharts/themes/patterns.js',
        'themes/nailapp/assets/global/plugins/amcharts/amcharts/themes/chalk.js',
        'themes/nailapp/assets/global/plugins/amcharts/ammap/ammap.js',
        'themes/nailapp/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js',
        'themes/nailapp/assets/global/plugins/amcharts/amstockcharts/amstock.js',
        'themes/nailapp/assets/global/plugins/fullcalendar/fullcalendar.min.js',
        'themes/nailapp/assets/global/plugins/horizontal-timeline/horizontal-timeline.js',
        'themes/nailapp/assets/global/plugins/flot/jquery.flot.min.js',
        'themes/nailapp/assets/global/plugins/flot/jquery.flot.resize.min.js',
        'themes/nailapp/assets/global/plugins/flot/jquery.flot.categories.min.js',
        'themes/nailapp/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        'themes/nailapp/assets/global/plugins/jquery.sparkline.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js',
        'themes/nailapp/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'themes/nailapp/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'themes/nailapp/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'themes/nailapp/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'themes/nailapp/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        'themes/nailapp/assets/global/scripts/app.min.js',
        'themes/nailapp/assets/pages/scripts/dashboard.min.js',
        'themes/nailapp/assets/layouts/layout/scripts/layout.min.js',
        'themes/nailapp/assets/layouts/layout/scripts/demo.min.js',
        'themes/nailapp/assets/layouts/global/scripts/quick-sidebar.min.js',
        'themes/nailapp/assets/layouts/global/scripts/quick-nav.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
