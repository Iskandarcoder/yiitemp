<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/reset.css',
        'css/style.css',
        'css/menu2.css',
        'css/style_fix.css',
        'css/pt.css',
        'css/jquery-ui.structure.css',
        'css/jquery-ui.css',
        'css/jquery-ui.theme.css',
        //'css/bootstrap.min.css',
        'fonts/font-awesome/css/font-awesome.min.css',
        'css/vibor.css',
        'css/pkudoc.css',
    ];
    public $js = [
        //'js/jquery.js',
        'js/ajaxupload.js',
        'js/bootstrap.min.js',
        'js/jquery.form.js',
        'js/jquery.maskedinput.js',
        'js/jquery-ui.js',
        'js/functiyalar.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
