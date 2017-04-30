<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\StaffTrainingDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-training-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?= $form->field($model, 'staff_training_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_training_topic_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_institute_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_sponsored_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_date_from')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
         //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
     ]);?>

     <?= $form->field($model, 'staff_date_to')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
         //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
     ]);?>

     <?= $form->field($model, 'staff_training_location')->textInput() ?>

     <?= $form->field($model, 'staff_id')->hiddenInput()->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
