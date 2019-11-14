<?php
namespace app\controllers\admin;
use app\controllers\AppController;

class UserController extends AppController{

    public function actionIndex(){

        //return 'ADMIN';
        return $this->render('index');
    }

    public function actionBlogSpot(){

        return 'BlogSpot';
    }
}
?>