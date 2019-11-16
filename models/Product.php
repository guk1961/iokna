<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $title
 * @property string $alias
 * @property int $category_id
 * @property string $content
 * @property string $image
 * @property double $price
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'alias', 'category_id', 'content', 'price'], 'required'],
            [['category_id'], 'integer'],
            [['content'], 'string'],
            [['price'], 'number'],
            [['title', 'alias', 'image'], 'string', 'max' => 255],
            [['alias'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'category_id' => 'Category ID',
            'content' => 'Content',
            'image' => 'Image',
            'price' => 'Price',
        ];
    }
}
