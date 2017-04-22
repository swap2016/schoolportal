<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\School */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-view">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'school_name',
            'school_email:email',
            'school_phoneno',
            'school_mobileno',
            'school_run_by',
            'school_country',
            'school_state',
            'school_city',
            'school_pincode',
            'school_category',
            'school_type',
            'school_establishment_year',
            'school_recognition_e_year',
            'school_recognition_s_year',
            'school_recognition_hs_year',
            'school_shiftwise',
            'school_residentail',
            'school_medium',
            'school_medium_text',
            'school_affiliation_board',
            'school_vocational_course',
            'school_latitude_longitude',
            'school_smc',
            'school_committee_count',
            'school_session_start',
            'school_session_end',
            'school_total_classroom',
            'school_toilet_number',
            'school_drinking_facility',
            'schoo_electicity_available',
            'school_type_boundraywall:ntext',
            'school_library',
            'school_playground',
            'school_playground_available',
            'school_lab:ntext',
            'school_smart_class',
            'school_principle_name',
            'school_address:ntext',
            'school_wise_principle',
            'school_website:ntext',
            'school_document',
            'created',
            'modified',
        ],
    ]) ?>
	
	<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
