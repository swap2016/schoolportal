<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StaffEducationInformation */

$this->title = 'Create Staff Education Information';
$this->params['breadcrumbs'][] = ['label' => 'Staff Education Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-education-information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
