<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\debug;

use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Debugger asset bundle
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DebugAsset extends AssetBundle
{
    public $sourcePath = '@yii/debug/assets';
    public $css = [
        'main.css',
        'toolbar.css',
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
