
<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <?= Html::csrfMetaTags() ?>
    <title><?= $this->title?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div slass="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a role= "presentation" class="active"><?=Html::a('Главная',['/site/index'])?></a>
                </li>
                <li class="nav-item">
                    <a role= "presentation"><?=Html::a('Статьи',['post/index'])?></a>
                </li>
                <li class="nav-item">
                    <a role= "presentation"><?=Html::a('Статья',['post/show'])?></a>
                </li>
                <li class="nav-item">
                    <a role= "presentation"><?=Html::a('Сообщения',['post/posts'])?></a>
                </li>
                <li class="nav-item">
                    <a role= "presentation"><?=Html::a('Test',['post/test'])?></a>
                </li>
            </ul>
            <?=$content?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>