<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\controllers\AppController;
//use Yii;
use app\models\TestForm;
use app\models\Category;
use app\models\PostForm;

class PostController extends AppController{
    public $layout='basic';
    
// public function beforeAction($action){
// //        my_log($action);
// }


        public function actionPosts(){
            
            $getPost = PostForm::findOne(106);
            // $getPost->email='tools@t.com'; 
            // $getPost->save();//update record
            // $getPost->delete(); // delete record

            $post = new PostForm();
            // $post->name = 'Вася Пупкин'; 
            // $post->email = 'vasya@mail.ru'; 
            // $post->text = 'Привет от Васи';
            // $post->save(); //insert record

            if($post->load(Yii::$app->request->post())){
                                if($post->save()){
                                    Yii::$app->session->setFlash('success','Данные приняты успешно');
                                    return $this->refresh();
                                }else{
                                    Yii::$app->session->setFlash('error','Ошибка сохранения данных');
                
                                }
                            }
                
            

              return $this->render('posts', compact('post'));//,['this'=>$this]);
        }

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
                // $query = 'select * from category where title like :param';
                // $cats = Category::findBySql($query, [':param' =>'%ip%'])->asArray()->all();

//            $cats = Category::findOne(694);//lazy load
//            $cats = Category::find(694)->with('product')->where('id=694')->all();//ager load
                $cats = Category::find()->with('product')->all();//ager load
//                $cats = Category::find()->all();//lazy load


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