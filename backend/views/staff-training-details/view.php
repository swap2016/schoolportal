<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffTrainingDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Training Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-training-details-view">

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
            'staff_id',
            'staff_training_type',
            'staff_training_topic_name',
            'staff_institute_name',
            'staff_sponsored_by',
            'staff_date_from',
            'staff_date_to',
            'staff_training_location',
            'staff_training_created',
            'staff_training_modified',
        ],
    ]) ?>

</div>
