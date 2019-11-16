<h1>Posts</h1>
<?php
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\Html;
// $post->save();
// die();
?>

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


<?php $form = ActiveForm::begin(['options'=>['id'=>'postform', 
                    // 'enableAjaxValidation'   => false,
                    // 'enableClientValidation' => false,
                    // 'validateOnBlur'         => false,
                    // 'validateOnType'         => false,
                    // 'validateOnChange'       => false,
                    // 'validateOnSubmit'       => true,
                    ]])?>
<?= $form->field($post,'name')->label('Имя') ?>
<?= $form->field($post,'email')->input('email') ?>
<?= $form->field($post,'text')->label('Сообщение')->textarea(['rows'=>5]) ?>
<?= Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end()?>