<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StaffTrainingDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Training Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-training-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff Training Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'staff_id',
            'staff_training_type',
            'staff_training_topic_name',
            'staff_institute_name',
            // 'staff_sponsored_by',
            // 'staff_date_from',
            // 'staff_date_to',
            // 'staff_training_location',
            // 'staff_training_created',
            // 'staff_training_modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
