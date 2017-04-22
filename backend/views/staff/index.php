<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'staff_school_id',
            'staff_branch_id',
            'staff_first_name',
            //'staff_middle_name',
            'staff_last_name',
            // 'staff_dob',
            // 'staff_gender',
            // 'staff_mobile_no',
            // 'staff_email:email',
            // 'staff_marital_status',
            // 'staff_identity_mark',
            // 'staff_parent_name',
            // 'staff_medical_fitness',
            // 'staff_character_cerificate',
            // 'staff_height',
            // 'staff_cast',
            // 'staff_category',
            // 'staff_religion',
            // 'staff_blood_group',
            // 'staff_state_name',
            // 'staff_city_name',
            // 'staff_nearest_railway_station',
            // 'staff_present_address:ntext',
            // 'staff_present_state',
            // 'staff_preset_city',
            // 'staff_present_pincode',
            // 'staff_permanent_address:ntext',
            // 'staff_permanent_state',
            // 'staff_permanent_city',
            // 'staff_permanent_pincode',
            // 'staff_created',
            // 'staff_modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
