<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StaffProfessionalInfo */

$this->title = 'Create Staff Professional Information';
$this->params['breadcrumbs'][] = ['label' => 'Staff Professional Information', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-professional-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
