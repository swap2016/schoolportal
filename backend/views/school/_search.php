<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'school_name') ?>

    <?= $form->field($model, 'school_email') ?>

    <?= $form->field($model, 'school_phoneno') ?>

    <?= $form->field($model, 'school_mobileno') ?>

    <?php // echo $form->field($model, 'school_run_by') ?>

    <?php // echo $form->field($model, 'school_country') ?>

    <?php // echo $form->field($model, 'school_state') ?>

    <?php // echo $form->field($model, 'school_city') ?>

    <?php // echo $form->field($model, 'school_pincode') ?>

    <?php // echo $form->field($model, 'school_category') ?>

    <?php // echo $form->field($model, 'school_type') ?>

    <?php // echo $form->field($model, 'school_establishment_year') ?>

    <?php // echo $form->field($model, 'school_recognition_e_year') ?>

    <?php // echo $form->field($model, 'school_recognition_s_year') ?>

    <?php // echo $form->field($model, 'school_recognition_hs_year') ?>

    <?php // echo $form->field($model, 'school_shiftwise') ?>

    <?php // echo $form->field($model, 'school_residentail') ?>

    <?php // echo $form->field($model, 'school_medium') ?>

    <?php // echo $form->field($model, 'school_medium_text') ?>

    <?php // echo $form->field($model, 'school_affiliation_board') ?>

    <?php // echo $form->field($model, 'school_vocational_course') ?>

    <?php // echo $form->field($model, 'school_latitude_longitude') ?>

    <?php // echo $form->field($model, 'school_smc') ?>

    <?php // echo $form->field($model, 'school_committee_count') ?>

    <?php // echo $form->field($model, 'school_session_start') ?>

    <?php // echo $form->field($model, 'school_session_end') ?>

    <?php // echo $form->field($model, 'school_total_classroom') ?>

    <?php // echo $form->field($model, 'school_toilet_number') ?>

    <?php // echo $form->field($model, 'school_drinking_facility') ?>

    <?php // echo $form->field($model, 'schoo_electicity_available') ?>

    <?php // echo $form->field($model, 'school_type_boundraywall') ?>

    <?php // echo $form->field($model, 'school_library') ?>

    <?php // echo $form->field($model, 'school_playground') ?>

    <?php // echo $form->field($model, 'school_playground_available') ?>

    <?php // echo $form->field($model, 'school_lab') ?>

    <?php // echo $form->field($model, 'school_smart_class') ?>

    <?php // echo $form->field($model, 'school_principle_name') ?>

    <?php // echo $form->field($model, 'school_address') ?>

    <?php // echo $form->field($model, 'school_wise_principle') ?>

    <?php // echo $form->field($model, 'school_website') ?>

    <?php // echo $form->field($model, 'school_document') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
