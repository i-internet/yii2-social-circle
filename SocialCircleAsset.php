<?php

namespace yii2world\socialcircle;

use yii\web\AssetBundle;

class SocialCircleAsset extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => YII_ENV === 'dev'
    ];

    /**
     *
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/assets/src';

    /**
     *
     * @inheritdoc
     */
    public $css = [
        'css/style.css'
    ];

    public $js = [
        'js/socialCircle.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
