<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "subscribe".
 *
 * @property integer $id
 * @property string $email
 * @property integer $user_ip
 */
class Subscribe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscribe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
	        [['email'], 'email', 'message'=>'Email is not valid'],
            [['email'], 'unique','message' => 'You have been already subscribed, thank you again for support!'],
            [['email','user_ip'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'user_ip' => Yii::t('app', 'User Ip'),
        ];
    }
}
