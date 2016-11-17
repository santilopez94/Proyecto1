<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class creativoAsset extends AssetBundle
{
	public $sourcePath = '@bower/tema_creativo/';
    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
        'css/creative.min.css',
        'vendor/magnific-popup/magnific-popup.css',
    ];
    public $js = [
    'vendor/jquery/jquery.min.js',
    'vendor/bootstrap/js/bootstrap.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
    'vendor/scrollreveal/scrollreveal.min.js',
    'vendor/magnific-popup/jquery.magnific-popup.min.js',
    'js/creative.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}