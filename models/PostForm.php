<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class PostForm extends  ActiveRecord {
//    class Post extends  Model {

    public static function tableName()
    {
        return "post";
    }
        public function attributeLabels(){
            return [
                'name'=>'Ваше имя',
                'email'=>'E-mail',
                'text'=>'Сообщение',
            ];
        }
        public function rules(){
            return[
                    [['name','text'],'required'],
                    ['email','email'],
                  ];
        }
    }