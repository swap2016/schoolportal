<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <? $form->field($model, 'id') ?>

    <?= $form->field($model, 'staff_school_id') ?>

    <?= $form->field($model, 'staff_branch_id') ?>

    <?= $form->field($model, 'staff_first_name') ?>

    <?php //echo $form->field($model, 'staff_middle_name') ?>

    <?= $form->field($model, 'staff_last_name') ?>

    <?php // echo $form->field($model, 'staff_dob') ?>

    <?php // echo $form->field($model, 'staff_gender') ?>

    <?php // echo $form->field($model, 'staff_mobile_no') ?>

    <?php // echo $form->field($model, 'staff_email') ?>

    <?php // echo $form->field($model, 'staff_marital_status') ?>

    <?php // echo $form->field($model, 'staff_identity_mark') ?>

    <?php // echo $form->field($model, 'staff_parent_name') ?>

    <?php // echo $form->field($model, 'staff_medical_fitness') ?>

    <?php // echo $form->field($model, 'staff_character_cerificate') ?>

    <?php // echo $form->field($model, 'staff_height') ?>

    <?php // echo $form->field($model, 'staff_cast') ?>

    <?php // echo $form->field($model, 'staff_category') ?>

    <?php // echo $form->field($model, 'staff_religion') ?>

    <?php // echo $form->field($model, 'staff_blood_group') ?>

    <?php // echo $form->field($model, 'staff_state_name') ?>

    <?php // echo $form->field($model, 'staff_city_name') ?>

    <?php // echo $form->field($model, 'staff_nearest_railway_station') ?>

    <?php // echo $form->field($model, 'staff_present_address') ?>

    <?php // echo $form->field($model, 'staff_present_state') ?>

    <?php // echo $form->field($model, 'staff_preset_city') ?>

    <?php // echo $form->field($model, 'staff_present_pincode') ?>

    <?php // echo $form->field($model, 'staff_permanent_address') ?>

    <?php // echo $form->field($model, 'staff_permanent_state') ?>

    <?php // echo $form->field($model, 'staff_permanent_city') ?>

    <?php // echo $form->field($model, 'staff_permanent_pincode') ?>

    <?php // echo $form->field($model, 'staff_created') ?>

    <?php // echo $form->field($model, 'staff_modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
