<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffEducationInformation */

$this->title = 'Update Staff Education Information: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Education Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-education-information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
