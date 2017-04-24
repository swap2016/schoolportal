<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_school_id')->textInput() ?>

    <?= $form->field($model, 'staff_branch_id')->textInput() ?>

    <?= $form->field($model, 'staff_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_dob')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
      //  'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
     ]);?>


    <?= $form->field($model, 'staff_gender')->dropDownList([ 'M' => 'Male', 'F' => 'Female'], ['prompt' => 'Select Gender']) ?>

    <?= $form->field($model, 'staff_mobile_no')->textInput() ?>

    <?= $form->field($model, 'staff_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_marital_status')->dropDownList([ 'M' => 'Married', 'UM' => 'Not Married'], ['prompt' => 'Select Marital Status']) ?>

    <?= $form->field($model, 'staff_identity_mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_parent_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_medical_fitness')->textInput() ?>

    <?= $form->field($model, 'staff_character_cerificate')->textInput() ?>

    <?= $form->field($model, 'staff_height')->textInput() ?>

    <?= $form->field($model, 'staff_cast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_blood_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_state_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_nearest_railway_station')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_present_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'staff_present_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_preset_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_present_pincode')->textInput() ?>

    <?= $form->field($model, 'staff_permanent_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'staff_permanent_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_permanent_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_permanent_pincode')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
