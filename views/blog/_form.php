<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 4/25/2017
 * Time: 8:00 PM
 */

use kartik\widgets\DateTimePicker;
use yii\helpers\Html;
use kartik\file\FileInput;
?>
<div style="margin-top:25px;">
	<?= $form->field($post, '')->textInput(['maxlength' => true]) ?>

	<?= $form->field($post, 'head_title')->textInput(['maxlenght' => true])?>

	<?= $form->field($post, 'img_description')->textarea(['maxlength' => true, 'rows'=> 6]) ?>

	<?= $form->field($post, 'image_status')->dropDownList([ 'ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE', 'DELETED' => 'DELETED','BANNED'=>'BANNED' ]) ?>

	<?= $form->field($post, 'image_group')->dropDownList([ 'SINGLE' => 'SINGLE', 'PHOTO_GALLERY' => 'PHOTO_GALLERY']) ?>

	<?= $form->field($model, 'img_taken_timedate')->widget(
		DateTimePicker::className(), [
		'name' => '',
		'type' => DateTimePicker::TYPE_INPUT,
		'value' => '',
		'pluginOptions' => [
			'autoclose'=>true,
			'format' => 'yyyy-m-d H:i:s'
		]
	]); ?>

	<?php
	echo $form->field($model, 'file')->fileInput();
	//	echo \$form->field($model, 'file')->widget(FileInput::classname(), [
	//		'options' => ['accept' => 'image/*'],
	//	]);
	?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success done-btn' : 'btn btn-primary done-btn']) ?>
	</div>
</div>

