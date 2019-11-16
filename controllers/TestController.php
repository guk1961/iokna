<?php
namespace app\controllers;
use Yii;
use app\models\TestForm;
use app\models\Category;
use app\models\Post;

class TestController extends AppController{
    public $layout='basic';
    


        public function actionPosts(){
            
            $post = new Post();
            $post->name = 'Вася'; 
            $post->email = 'vasya@mail.ru'; 
            $post->text = 'Привет от Васи';

            if (Yii::app()->request->getIsAjaxRequest()) {

                $error=CActiveForm::validate($post);
        
                    if($error!='[]'){
        
                        echo $error;
        
                        Yii::app()->end();
        
                    }
        
            }
        
           if (isset($_POST[get_class($post)])&&($_POST['ajax']!='postform-form'))//именно эта строчка спасла меня от дублирований в свое время
        
           {
        
              //ваш код по обработке
        
           } 
            
            $post->save(true);

              return $this->render('posts', compact('post'));//,['this'=>$this]);
        }

    }
?>