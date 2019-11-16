<?php
namespace app\controllers;
use Yii;
use app\models\TestForm;
use app\models\Category;
use app\models\Post;

class PostController extends AppController{
    public $layout='basic';
    


        public function actionPosts(){
            
            $post = new Post();
            $post->name = 'Вася'; 
            $post->email = 'vasya@mail.ru'; 
            $post->text = 'Привет от Васи';
            
            $post->save();

              return $this->render('posts', compact('post'));//,['this'=>$this]);
        }


?>