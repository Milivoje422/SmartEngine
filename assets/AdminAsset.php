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
class AdminAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'AdminLayout/vendors/bootstrap/dist/css/bootstrap.min.css',
		'AdminLayout/vendors/font-awesome/css/font-awesome.min.css',
		'AdminLayout/vendors/nprogress/nprogress.css',
		'AdminLayout/vendors/iCheck/skins/flat/green.css',
		'AdminLayout/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
		'AdminLayout/vendors/jqvmap/dist/jqvmap.min.css',
		'AdminLayout/vendors/bootstrap-daterangepicker/daterangepicker.css',
		'AdminLayout/build/css/custom.min.css',

	];

	public $js = [
		'AdminLayout/vendors/jquery/dist/jquery.min.js',
		'AdminLayout/vendors/bootstrap/dist/js/bootstrap.min.js',
		'AdminLayout/vendors/fastclick/lib/fastclick.js',
		'AdminLayout/vendors/nprogress/nprogress.js',
		'AdminLayout/vendors/Chart.js/dist/Chart.min.js',
		'AdminLayout/vendors/gauge.js/dist/gauge.min.js',
		'AdminLayout/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
		'AdminLayout/vendors/iCheck/icheck.min.js',
		'AdminLayout/vendors/skycons/skycons.js',
		'AdminLayout/vendors/Flot/jquery.flot.js',
		'AdminLayout/vendors/Flot/jquery.flot.pie.js',
		'AdminLayout/vendors/Flot/jquery.flot.time.js',
		'AdminLayout/vendors/Flot/jquery.flot.stack.js',
		'AdminLayout/vendors/Flot/jquery.flot.resize.js',
		'AdminLayout/vendors/flot.orderbars/js/jquery.flot.orderBars.js',
		'AdminLayout/vendors/flot-spline/js/jquery.flot.spline.min.js',
		'AdminLayout/vendors/flot.curvedlines/curvedLines.js',
		'AdminLayout/vendors/DateJS/build/date.js',
		'AdminLayout/vendors/jqvmap/dist/jquery.vmap.js',
		'AdminLayout/vendors/jqvmap/dist/maps/jquery.vmap.world.js',
		'AdminLayout/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
		'AdminLayout/vendors/moment/min/moment.min.js',
		'AdminLayout/vendors/bootstrap-daterangepicker/daterangepicker.js',
		'AdminLayout/build/js/custom.min.js'
	];

	public $depends = [

	];
}
