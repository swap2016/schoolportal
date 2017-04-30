<?php


use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\School;

use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord ? 'create': 'update']) ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create and Next' : 'Update and Next', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord?'create_next':'update_next','name'=>'submit']) ?>
    </div>

    <?= $form->field($model, 'staff_school_id')->dropdownList(ArrayHelper::map(School::find()->all(),'id','school_name'),
    ['prompt'=>'Select School','onchange'=>'$.post("index.php?r=school/lists&id='.'"+$(this).val(),function(data) { $("#select#staff_branch_id").html(data); });' ]) ?>

    <?= $form->field($model, 'staff_branch_id')->dropdownList(['prompt'=>'Select Branch']) ?>

    <?= $form->field($model, 'staff_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_dob')->widget(
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


    <?= $form->field($model, 'staff_gender')->dropDownList([ 'M' => 'Male', 'F' => 'Female'], ['prompt' => 'Select Gender']) ?>

    <?= $form->field($model, 'staff_mobile_no')->textInput() ?>

    <?= $form->field($model, 'staff_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_marital_status')->dropDownList([ 'M' => 'Married', 'UM' => 'Not Married'], ['prompt' => 'Select Marital Status']) ?>

    <?= $form->field($model, 'staff_identity_mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_parent_name')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'staff_medical_fitness')->textInput() ?>

    <?= $form->field($model, 'staff_medical_fitness')->checkbox(array('label'=>'Medical Fitness')); ?>


    <?php //echo $form->field($model, 'staff_character_cerificate')->textInput() ?>

    <?= $form->field($model, 'staff_character_cerificate')->checkbox(array('label'=>'Character Certificate')); ?>


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
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord ? 'create': 'update']) ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create and Next' : 'Update and Next', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord?'create_next':'update_next','name'=>'submit']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
