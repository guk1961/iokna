<?php
namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller{

    public function my_log($arr){
//        echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
        echo '<pre>' . print_r($arr, true). '</pre>';
    }
}
 ?>