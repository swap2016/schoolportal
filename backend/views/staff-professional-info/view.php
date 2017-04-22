<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffProfessionalInfo */

$this->title = $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Professional Information', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-professional-info-view">

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
            //'id',
            'staff_id',
            'staff_appointment_date',
            'staff_designation',
            'staff_mode_recruitment',
            'staff_class',
            'staff_type',
            'staff_salary',
            'staff_retirement',
            'staff_deduction_type',
            'staff_gps_cps_number',
            'staff_gis_member',
            'staff_esalary_code',
        ],
    ]) ?>

</div>
