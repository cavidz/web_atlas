<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ContactAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'https://fonts.googleapis.com/css?family=Roboto%3A700%7COpen+Sans%3A400%2C700&#038;subset=latin',
        'css/featherlight.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/modernizr.custom.24530.js',
        'js/picturefill.min.js',
        'js/underscore.min.js?ver=1.6.0',
        'js/featherlight.js',
        '//maps.google.com/maps/api/js?v=3&key=AIzaSyD4io4mSixRWpPwAymkuXPzRt5jbTlK70Q',
        'js/map.js',
        'js/validator.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
