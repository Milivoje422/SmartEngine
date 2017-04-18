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
        'NewDesign/css/animate.css',
        'NewDesign/css/bootstrap.css',
        'NewDesign/css/custom.css',
        'NewDesign/css/font-awesome.css',
        'NewDesign/css/nexus.css',
        'NewDesign/css/responsive.css'
    ];

	public $js = [
        'NewDesign/js/jquery.js',
        'NewDesign/js/jquery.min.js',
        'NewDesign/js/bootstrap.min.js',
        'NewDesign/js/jquery.isotope.js',
        'NewDesign/js/jquery.slicknav.js',
        'NewDesign/js/jquery.stellar.js',
        'NewDesign/js/jquery.sticky.js',
        'NewDesign/js/jquery.visible.js',
        'NewDesign/js/modernizr.custom.js',
        'NewDesign/js/modernizr.js',
        'NewDesign/js/scripts.js',
        'NewDesign/js/slimbox2.js'
	];

    public $depends = [
        
    ];
}
