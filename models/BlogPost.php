<?php

namespace app\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;
/**
 * This is the model class for table "blog_post".
 *
 * @property integer $id
 * @property string $post_title
 * @property integer $user_id
 * @property string $post_content
 * @property string $created_at
 * @property string $uptaded_at
 * @property string $post_image
 */
class BlogPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

	public $file; //Define file for upload


    public static function tableName()
    {
        return 'blog_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'user_id', 'created_at','category'], 'required'],
            [['user_id','category'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['post_title'], 'string', 'max' => 255],
            [['post_content', 'post_image'], 'string', 'max' => 1250],
	        [['file'], 'safe'],
	        [['file'], 'file','skipOnEmpty' => false, 'extensions' => 'png, jpg','on'=>'create'],
	        [['file'], 'file','skipOnEmpty' => true, 'extensions' => 'png, jpg','on'=>'update'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'post_title' => Yii::t('app', 'Post Title'),
            'user_id' => Yii::t('app', 'User ID'),
            'post_content' => Yii::t('app', 'Post Content'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Uptaded At'),
            'post_image' => Yii::t('app', 'Post Image'),
	        'category' => Yii::t('app', 'Category'),
	        'file' => Yii::t('app','Image'),
        ];
    }

	//Define a path for image upload
	public function path(){
		return (!is_dir('uploads/')? mkdir('uploads/') : 'uploads/');
	}

	// Limit text for image
	public function getStrings($text, $start, $end){
		return substr($text, $start, $end);
	}

	// Get post image path
	public function getImage(){
		return Yii::$app->homeUrl . $this->post_image;
	}

	//  Define image path and save to DB.
	public function beforeUpload($img){
		$this->file = $img;
		$i_name = self::getStrings($this->post_title,0, 8);
		$this->post_image = self::path().$i_name.'_Image.'.$this->file->extension;
	}

	// Upload post image
	public function upload($img){
		$this->file = $img;
		$i_name = self::getStrings($this->post_title,0, 8);
		$this->file->saveAs(self::path().$i_name.'_Image.'.$this->file->extension);
	}

	// Delete old image from post
	public function deleteOldImage($img1, $img2 = null, $img3 = null){
		unlink($img1);
		unlink($img2);
		unlink($img3);
	}

}
