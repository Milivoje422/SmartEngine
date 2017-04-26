<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_categories".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $c_title
 * @property string $c_description
 * @property string $created_at
 * @property string $uptaded_at
 */
class PostCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'c_title', 'created_at'], 'required'],
            [['user_id'], 'integer'],
            [['created_at', 'uptaded_at'], 'safe'],
            [['c_title', 'c_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'c_title' => Yii::t('app', 'C Title'),
            'c_description' => Yii::t('app', 'C Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'uptaded_at' => Yii::t('app', 'Uptaded At'),
        ];
    }
}
