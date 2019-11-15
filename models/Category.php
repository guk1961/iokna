<?php
namespace app\models;
use yii\base\Model;

    class TestForm extends Model {

        public $name;
        public $email;
        public $phone;
        public $text;

        public function attributeLabels(){
            return [
                'name'=>'Ваше имя',
                'email'=>'E-mail',
                'phone'=>'Телефон',
                'text'=>'Сообщение',
            ];
        }
        public function rules(){
            return[
//                [['name','phone','email'],'required', 'message'=>'введите данные'],
                    [['name','phone','email'],'required'],
                    ['email','email'],
                    ['phone','number'],
                    ['name','string', 'length'=>[3,20]],
//                    ['name','string', 'min'=>3],
                    ['text','trim'],
                  ];
        }
    }