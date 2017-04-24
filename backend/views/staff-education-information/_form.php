<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffEducationInformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-education-information-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'staff_education_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_board_university')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_percentage')->textInput() ?>

    <?= $form->field($model, 'staff_passing_year')->textInput() ?>

    <?= $form->field($model, 'staff_stream')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_education_type')->dropDownList([ 'Basic' => 'Basic', 'Technical' => 'Technical', 'Professional' => 'Professional', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
