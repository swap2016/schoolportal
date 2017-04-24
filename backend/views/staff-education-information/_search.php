<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffEducationInformationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-education-information-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'staff_education_name') ?>

    <?= $form->field($model, 'staff_board_university') ?>

    <?= $form->field($model, 'staff_percentage') ?>

    <?php // echo $form->field($model, 'staff_passing_year') ?>

    <?php // echo $form->field($model, 'staff_stream') ?>

    <?php // echo $form->field($model, 'staff_grade') ?>

    <?php // echo $form->field($model, 'staff_education_type') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
