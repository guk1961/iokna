<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class Product extends ActiveRecord{

    public function getCategory(){
        return $this->hasOne(Category::ClassName(),['id'=>'category_id']);
    }

}
