<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		
        'css/bootstrap.min.css',
        'css/style.css',
        'css/morris.css',
        'css/font-awesome.css',
		
		'http://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400',
		'http://fonts.googleapis.com/css?family=Montserrat:400,700',
		'css/icon-font.min.css'
    ];
    public $js = [
		'js/jquery-2.1.4.min.js',
		'js/jquery.nicescroll.js',
		'js/scripts.js',
		'js/bootstrap.min.js',
		'js/raphael-min.js',
		'js/morris.js'
		
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
