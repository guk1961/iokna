<?php
namespace app\controllers;
use Yii;
class PostController extends AppController{
    public $layout='basic';
    
// public function beforeAction($action){
// //        my_log($action);
// }

        public function actionTest(){
            $names = ['Иванов','Петров','Сидоров'];
            
            return $this->render('test');//,['this'=>$this]);
        }
        public function actionShow(){
            $this->view->title='Выбранная статья';
            $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
            $this->view->registerMetaTag(['name'=>'description', 'content'=>'Описание страницы']);

            return $this->render('show');
        }
        public function actionIndex(){
            $this->view->title='Список статей';
            if(Yii::$app->request->isAjax){
                //my_log($_POST);
                //print_r(Yii::$app->request->post());
                return 'ajax OK';
            }
            return $this->render('index');
        }
}

?>