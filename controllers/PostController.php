<?php
namespace app\controllers;
use Yii;
class PostController extends AppController{
    public $layout='basic';
    
        public function actionTest(){
            $names = ['Иванов','Петров','Сидоров'];
            
            return $this->render('test');//,['this'=>$this]);
        }
        public function actionShow(){
            return $this->render('show');
        }
}

?>