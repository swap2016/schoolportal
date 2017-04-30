<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StaffTrainingDetails */

$this->title = 'Create Staff Training Details';
$this->params['breadcrumbs'][] = ['label' => 'Staff Training Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-training-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
