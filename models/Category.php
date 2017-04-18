<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property integer $user_id
 * @property string $category_img
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['category_name'], 'string', 'max' => 45],
            [['category_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => Yii::t('app', 'Category ID'),
            'category_name' => Yii::t('app', 'Category Name'),
            'user_id' => Yii::t('app', 'User ID'),
            'category_img' => Yii::t('app', 'Category Image'),
        ];
    }
}
