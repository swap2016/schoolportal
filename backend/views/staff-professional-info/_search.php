<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffProfessionalInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-professional-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo $form->field($model, 'id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'staff_appointment_date') ?>

    <?= $form->field($model, 'staff_designation') ?>

    <?= $form->field($model, 'staff_mode_recruitment') ?>

    <?php // echo $form->field($model, 'staff_class') ?>

    <?php // echo $form->field($model, 'staff_type') ?>

    <?php // echo $form->field($model, 'staff_salary') ?>

    <?php // echo $form->field($model, 'staff_retirement') ?>

    <?php // echo $form->field($model, 'staff_deduction_type') ?>

    <?php // echo $form->field($model, 'staff_gps_cps_number') ?>

    <?php // echo $form->field($model, 'staff_gis_member') ?>

    <?php // echo $form->field($model, 'staff_esalary_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
