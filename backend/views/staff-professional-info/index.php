<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StaffProfessionalInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Professional Information';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-professional-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff Professional Information', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'staff_id',
            'staff_appointment_date',
            'staff_designation',
            'staff_mode_recruitment',
            // 'staff_class',
            // 'staff_type',
            // 'staff_salary',
            // 'staff_retirement',
            // 'staff_deduction_type',
            // 'staff_gps_cps_number',
            // 'staff_gis_member',
            // 'staff_esalary_code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
