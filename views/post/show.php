<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>
    <div id='test'>Привет</div>
</body>
</html>
<?php
    $this->registerJsFile('@web/js/myscripts.js', ['depends'=>'yii\web\YiiAsset']);
?>