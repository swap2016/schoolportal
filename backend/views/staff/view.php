<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id',
            'staff_school_id',
            'staff_branch_id',
            'staff_first_name',
            'staff_middle_name',
            'staff_last_name',
            'staff_dob',
            'staff_gender',
            'staff_mobile_no',
            'staff_email:email',
            'staff_marital_status',
            'staff_identity_mark',
            'staff_parent_name',
            'staff_medical_fitness',
            'staff_character_cerificate',
            'staff_height',
            'staff_cast',
            'staff_category',
            'staff_religion',
            'staff_blood_group',
            'staff_state_name',
            'staff_city_name',
            'staff_nearest_railway_station',
            'staff_present_address:ntext',
            'staff_present_state',
            'staff_preset_city',
            'staff_present_pincode',
            'staff_permanent_address:ntext',
            'staff_permanent_state',
            'staff_permanent_city',
            'staff_permanent_pincode',
            'staff_created',
            'staff_modified',
        ],
    ]) ?>

</div>
