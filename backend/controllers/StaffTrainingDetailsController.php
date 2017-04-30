<?php

namespace backend\controllers;

use Yii;
use backend\models\StaffTrainingDetails;
use backend\models\StaffTrainingDetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\db\Expression;


/**
 * StaffTrainingDetailsController implements the CRUD actions for StaffTrainingDetails model.
 */
class StaffTrainingDetailsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all StaffTrainingDetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffTrainingDetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StaffTrainingDetails model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new StaffTrainingDetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaffTrainingDetails(); 

        //echo Yii::$app->formatter->asDatetime('now','yyyy-mm-dd H:i:s');
        //echo Yii::$app->formatter->asDatetime('now','php:d-M-Y H:i:s');
        //echo Yii::$app->formatter->asDatetime(date('Y-d-m h:i:s')); //Sep 12, 2014, 2:21:56 AM

        $current_date_time = date("Y-m-d h:m:i");

        $model->staff_training_created = $current_date_time;

        $model->staff_id = Yii::$app->request->post('staff_id');


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['staff/view', 'id' => $model->staff_id]);

        } else {

            #echo "<pre>";print_r($model->validate());
            #print_r($model->getErrors());

            $model->staff_id = Yii::$app->request->get('id');


            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Updates an existing StaffTrainingDetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['staff/view', 'id' => $model->staff_id]);

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StaffTrainingDetails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StaffTrainingDetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StaffTrainingDetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StaffTrainingDetails::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
