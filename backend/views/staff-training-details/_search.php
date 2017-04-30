<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffTrainingDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-training-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'staff_training_type') ?>

    <?= $form->field($model, 'staff_training_topic_name') ?>

    <?= $form->field($model, 'staff_institute_name') ?>

    <?php // echo $form->field($model, 'staff_sponsored_by') ?>

    <?php // echo $form->field($model, 'staff_date_from') ?>

    <?php // echo $form->field($model, 'staff_date_to') ?>

    <?php // echo $form->field($model, 'staff_training_location') ?>

    <?php // echo $form->field($model, 'staff_training_created') ?>

    <?php // echo $form->field($model, 'staff_training_modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
