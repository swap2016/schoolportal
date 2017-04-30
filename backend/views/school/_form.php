<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\State;
//use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\School */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-form">

    <?php $form = ActiveForm::begin(['id'=>$model->formName()]); ?>

	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_phoneno')->textInput() ?>

    <?= $form->field($model, 'school_mobileno')->textInput() ?>

    <?= $form->field($model, 'school_run_by')->dropDownList([ 'TRUST' => 'TRUST', 'NGO' => 'NGO', '' => '', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_country')->dropDownList([ '1' => 'India' ], ['prompt' => 'SelectContry']) ?>

    
    <?= $form->field($model, 'school_state')->dropDownList(ArrayHelper::map(State::find()->all(),'state_id','state_name'),
	['prompt'=>'select state',
			
	]); ?>
	
	

    <?= $form->field($model, 'school_city')->textInput() ?>

    <?= $form->field($model, 'school_pincode')->textInput() ?>

    <?= $form->field($model, 'school_category')->dropDownList([ 'Pri-Primary' => 'Pri-Primary', 'Primary' => 'Primary', 'Middle' => 'Middle', 'Secondary' => 'Secondary', 'Higher-Secondary' => 'Higher-Secondary', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_type')->dropDownList([ 'Boys-Only' => 'Boys-Only', 'Girls-Only' => 'Girls-Only', 'Co-Educational' => 'Co-Educational', '' => '', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_establishment_year')->textInput() ?>

    <?= $form->field($model, 'school_recognition_e_year')->textInput() ?>

    <?= $form->field($model, 'school_recognition_s_year')->textInput() ?>

    <?= $form->field($model, 'school_recognition_hs_year')->textInput() ?>

    <?= $form->field($model, 'school_shiftwise')->textInput() ?>

    <?= $form->field($model, 'school_residentail')->textInput() ?>

    <?= $form->field($model, 'school_medium')->dropDownList([ 'English' => 'English', 'Hindi' => 'Hindi', 'Other' => 'Other', '' => '', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_medium_text')->textInput() ?>

    <?= $form->field($model, 'school_affiliation_board')->dropDownList([ 'CBSE' => 'CBSE', 'ICSE' => 'ICSE', 'STATE_BOARD' => 'STATE BOARD', 'INTERNATIONAL_BOARD' => 'INTERNATIONAL BOARD', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_vocational_course')->textInput() ?>

    <?php // $form->field($model, 'school_latitude_longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_smc')->dropDownList([ 'NOT-APPLICABLE' => 'NOT-APPLICABLE', 'YES' => 'YES', 'NO' => 'NO', '' => '', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_committee_count')->textInput() ?>

    <?= $form->field($model, 'school_session_start')->textInput() ?>

    <?= $form->field($model, 'school_session_end')->textInput() ?>

    <?= $form->field($model, 'school_total_classroom')->textInput() ?>

    <?= $form->field($model, 'school_toilet_number')->textInput() ?>

    <?= $form->field($model, 'school_drinking_facility')->dropDownList([ 'HAND-PUMP' => 'HAND-PUMP', 'TAPE-WATER' => 'TAPE-WATER', 'OTHER' => 'OTHER', 'WELL' => 'WELL', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'schoo_electicity_available')->dropDownList([ 'YES' => 'YES', 'NO' => 'NO', 'YES-NOT-FUNCTIONAL' => 'YES-NOT-FUNCTIONAL', '' => '', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_type_boundraywall')->textInput() ?>

    <?= $form->field($model, 'school_library')->dropDownList([ 'YES' => 'YES', 'NO' => 'NO', '' => '', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_playground')->dropDownList([ 'YES' => 'YES', 'NO' => 'NO', '' => '', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'school_playground_available')->textInput() ?>

    <?= $form->field($model, 'school_lab')->textInput() ?>

    <?= $form->field($model, 'school_smart_class')->textInput() ?>

    <?= $form->field($model, 'school_principle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'school_wise_principle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_website')->textInput() ?>

    <?= $form->field($model, 'school_document')->textInput(['maxlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        
    </div>

    <?php ActiveForm::end(); ?>

</div>
