<?php
namespace app\controllers;
use Yii;
use app\models\TestForm;
use app\models\Category;

class PostController extends AppController{
    public $layout='basic';
    
// public function beforeAction($action){
// //        my_log($action);
// }
        public function actionTest(){
            $names = ['Иванов','Петров','Сидоров'];

            $this->view->title='test view';

            $model = new TestForm();
            if($model->load(Yii::$app->request->post())){
//                debug($model);
//                debug(Yii::$app->request->post());
//                die();
                if($model->validate()){
//                    debug(Yii::$app->request->post());
                    Yii::$app->session->setFlash('success','Данные приняты успешно');
                    return $this->refresh();
                }else{
                    Yii::$app->session->setFlash('error','Ошибка сохранения данных');

                }
            }
            return $this->render('test', compact('names','model'));//,['this'=>$this]);
        }
        public function actionShow(){
            $this->view->title='Выбранная статья';
            $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
            $this->view->registerMetaTag(['name'=>'description', 'content'=>'Описание страницы']);

//            $cats = Category::find()->all();
//            $cats = Category::find()->orderBy(['pid' => SORT_ASC])->all();
//            $cats = Category::find()->asArray()->all();
//            $cats = Category::find()->asArray()->where('pid=691')->all();
//            $cats = Category::find()->asArray()->where(['pid'=>692])->all();
//            $cats = Category::find()->asArray()->where(['like','title','кро'])->all();
//              $cats = Category::find()->asArray()->where(['<=','pid', 700])->all();
//              $cats = Category::find()->asArray()->where(['<=','pid', 700])->limit(2)->all();
//              $cats = Category::find()->asArray()->where(['<=','pid', 700])->limit(1)->one();
//              $cats = Category::find()->asArray()->where(['<=','pid', 700])->one();
//              $cats = Category::find()->asArray()->where(['<=','pid', 700])->count();
//                $cats = Category::findOne(['<=','pid', 700]);
//                $cats = Category::findAll(['pid'=>692]);
                // $query = 'select * from category where title like "%ip%"';
                // $cats = Category::findBySql($query)->asArray()->all();
                $query = 'select * from category where title like :param';
                $cats = Category::findBySql($query, [':param' =>'%ip%'])->asArray()->all();

            return $this->render('show',compact('cats'));
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