<?php

namespace app\controllers;
//use yii\web\Controller;

class MyController extends AppController{

    public function actionIndex($id=''){
        //return 'My Controller';
//        $id = 'Gfhfvtnh';
        $hi = 'Привет!';
        $names = ['Иванов','Петров','Сидоров'];
//        return $this->render('Index', ['id'=>$id,'hi'=>$hi, 'names'=>$names,'test'=>'ttttttttt']);
         return $this->render('Index', compact('id','hi','names'));
}
};

?>
