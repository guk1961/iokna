
<?php
use app\assets\AppAsset;

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
    <h1>Basic Layout</h1>
    <?=$content?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>