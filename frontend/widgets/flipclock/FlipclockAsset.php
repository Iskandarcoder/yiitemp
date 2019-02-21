<?php


namespace frontend\widgets\flipclock;

use yii\web\AssetBundle;

class FlipclockAsset extends AssetBundle
{
    // public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'flipclock.min.js',
    ];

    public $css = [
        'flipclock.css',
    ];

	public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
} 
