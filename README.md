Creating Radial Social Share Buttons with Yii2
==============================================
SocialCircle is a jQuery plugin that allows the user to reveal and hide radial social share buttons with a toggle button. Also can be used to create a radial popup menu for your website navigation.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist i-internet/yii2-social-circle "*"
```

or add

```
"yii2world/yii2-social-circle": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```

<?php

use yii\helpers\Html;

echo \yii2world\socialcircle\SocialCircle::widget([
    'items' => [
        Html::a('<i class="fa fa-google-plus"></i>', 'https://google.com', [
            'target' => '_blank'
        ]),
        Html::a('<i class="fa fa-github"></i>', 'https://github.com', [
            'target' => '_blank'
        ]),
        Html::a('<i class="fa fa-facebook"></i>', 'https://facebook.com', [
            'target' => '_blank'
        ])
    ]
]);
?>
```

