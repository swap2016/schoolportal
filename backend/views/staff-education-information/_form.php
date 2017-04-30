    <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffEducationInformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-education-information-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>    

        <?= Html::submitButton($model->isNewRecord ? 'Create and Next' : 'Update and Next', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord?'create_next':'update_next','name'=>'submit']) ?>

    </div>

    <?= $form->field($model, 'staff_education_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_board_university')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_percentage')->textInput() ?>


    <?= $form->field($model, 'staff_stream')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_education_type')->dropDownList([ 'Basic' => 'Basic', 'Technical' => 'Technical', 'Professional' => 'Professional', ], ['prompt' => 'Select Education']) ?>

    <?= $form->field($model, 'staff_passing_year')->dropDownList($model->getYearsList()) ?>

     <?= $form->field($model, 'staff_id')->hiddenInput()->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>    

        <?= Html::submitButton($model->isNewRecord ? 'Create and Next' : 'Update and Next', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','value'=>$model->isNewRecord?'create_next':'update_next','name'=>'submit']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
