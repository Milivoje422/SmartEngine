<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_tags".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $post_id
 * @property string $tag_title
 * @property string $tag_description
 * @property string $created_at
 * @property string $updated_at
 */
class PostTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'post_id', 'tag_title', 'created_at'], 'required'],
            [['user_id', 'post_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['tag_title', 'tag_description'], 'string', 'max' => 255],
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
            'post_id' => Yii::t('app', 'Post ID'),
            'tag_title' => Yii::t('app', 'Tag Title'),
            'tag_description' => Yii::t('app', 'Tag Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
