<?php
//debug($model);
//my_log('Hello World');
use mihaildev\ckeditor\CKEditor;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\Html;
?>
<h1>Test Form</h1>
<?php if(Yii::$app->session->hasFlash('success')):?>
    <div class="alert alert-success" role="alert">
        <?php echo Yii::$app->session->getFlash('success');?>
    </div>
<?php endif;?>        
<?php if(Yii::$app->session->hasFlash('error')):?>
    <div class="alert alert-warning" role="alert">
        <?php echo Yii::$app->session->getFlash('error');?>
    </div>
<?php endif;?>        


<?php $form = ActiveForm::begin(['options'=>['id'=>'testform']])?>
<?= $form->field($model,'name')->label('Имя') ?>
<?= $form->field($model,'phone')->label('Телефон')->input('phone') ?>
<?= $form->field($model,'email')->input('email') ?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?php
$form->field($model, 'text')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);
?>
<?= $form->field($model,'text')->label('Сообщение')->textarea(['rows'=>5]) ?>
<?= Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end()?>
