<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffProfessionalInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-professional-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'staff_appointment_date')->textInput() ?>

    <?= $form->field($model, 'staff_designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_mode_recruitment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_type')->dropDownList([ 'GAZETTED' => 'Gazetted', 'NON-GAZETTED' => 'Non-Gazetted'], ['prompt' => 'Select Staff Type']) ?>

    <?= $form->field($model, 'staff_salary')->textInput() ?>

    <?= $form->field($model, 'staff_retirement')->textInput() ?>

    <?= $form->field($model, 'staff_deduction_type')->dropDownList([ 'GPF' => 'GPF', 'CPS' => 'CPS'], ['prompt' => 'Select Deduction Type']) ?>

    <?= $form->field($model, 'staff_gps_cps_number')->textInput() ?>

    <?= $form->field($model, 'staff_gis_member')->textInput() ?>

    <?= $form->field($model, 'staff_esalary_code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
