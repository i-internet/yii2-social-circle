<?php

namespace yii2world\socialcircle;

use yii\helpers\Json;

/**
 * Class SocialCircle
 * @package yii2world\socialcircle
 */
class SocialCircle extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $clientOptions = [];

    public $items = [];

    public $center = '<i class="fa fa-share-alt"></i>';

    public function init()
    {
        parent::init();
        $this->clientOptions['rotate'] = $this->clientOptions['rotate'] ?? 0;
        $this->clientOptions['radius'] = $this->clientOptions['radius'] ?? 200;
        $this->clientOptions['circleSize'] = $this->clientOptions['circleSize'] ?? 2;
        $this->clientOptions['speed'] = $this->clientOptions['speed'] ?? 500;
        $view = $this->getView();
        SocialCircleAsset::register($view);
        $socialOptions = Json::encode($this->clientOptions);
        $view->registerJs(<<<JS
            $('#{$this->getId()}').socialCircle($socialOptions);
JS
        );
    }

    public function run()
    {
        echo $this->render('index', [
            'id' => $this->getId(),
            'items' => $this->items,
            'center' => $this->center
        ]);
    }
}
