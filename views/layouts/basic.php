
<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div slass="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a role= "presentation" class="active"><?=Html::a('Главная',['/site/index'])?></a>
                </li>
                <li class="nav-item">
                    <a role= "presentation"><?=Html::a('Статьи',['post/index'])?></a>
                </li>
                <li class="nav-item">
                    <a role= "presentation"><?=Html::a('Статья',['post/show'])?></a>
                </li>
            </ul>
            <?=$content?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>