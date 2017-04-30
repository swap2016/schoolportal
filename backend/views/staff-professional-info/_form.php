<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffProfessionalInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-professional-info-form">

    <?php $form = ActiveForm::begin(); ?>

     <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create and Next' : 'Update and Next', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord?'create_next':'update_next','name'=>'submit']) ?>

    </div>

    <?= $form->field($model, 'staff_appointment_date')->widget(
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

    <?= $form->field($model, 'staff_designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_mode_recruitment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_type')->dropDownList([ 'GAZETTED' => 'Gazetted', 'NON-GAZETTED' => 'Non-Gazetted'], ['prompt' => 'Select Staff Type']) ?>

    <?= $form->field($model, 'staff_salary')->textInput() ?>

    <?= $form->field($model, 'staff_retirement')->widget(
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

    <?= $form->field($model, 'staff_deduction_type')->dropDownList([ 'GPF' => 'GPF', 'CPS' => 'CPS'], ['prompt' => 'Select Deduction Type']) ?>

    <?= $form->field($model, 'staff_gps_cps_number')->textInput() ?>

    <?= $form->field($model, 'staff_gis_member')->textInput() ?>

    <?= $form->field($model, 'staff_esalary_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_id')->hiddenInput()->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord  ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create and Next' : 'Update and Next', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord?'create_next':'update_next','name'=>'submit']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
