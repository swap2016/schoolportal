<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StaffEducationInformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Education Informations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-education-information-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff Education Information', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'staff_id',
            'staff_education_name',
            'staff_board_university',
            'staff_percentage',
            // 'staff_passing_year',
            // 'staff_stream',
            // 'staff_grade',
            // 'staff_education_type',
            // 'created',
            // 'modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
