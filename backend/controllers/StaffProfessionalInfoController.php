<?php

namespace backend\controllers;

use Yii;
use backend\models\StaffProfessionalInfo;
use backend\models\StaffProfessionalInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaffProfessionalInfoController implements the CRUD actions for StaffProfessionalInfo model.
 */
class StaffProfessionalInfoController extends Controller
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
     * Lists all StaffProfessionalInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffProfessionalInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        //echo "<pre>";print_r($searchModel);

        //echo "<pre>";print_r($dataProvider);

        //exit;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StaffProfessionalInfo model.
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
     * Creates a new StaffProfessionalInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaffProfessionalInfo();

        $model->staff_id = Yii::$app->request->post('staff_id');
    
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if (Yii::$app->request->post('submit') =='create_next') {

                 return $this->redirect(['staff-education-information/create', 'id' => $model->staff_id]);

              } else {

                 return $this->redirect(['view', 'id' => $model->id]);
             }
        } else {

             $model->staff_id = Yii::$app->request->get('id');

            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing StaffProfessionalInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

             if (Yii::$app->request->post('submit') =='update_next') {

                 return $this->redirect(['staff-education-information/create', 'id' => $model->staff_id]);

              } else {

                 return $this->redirect(['view', 'id' => $model->id]);
             }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StaffProfessionalInfo model.
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
     * Finds the StaffProfessionalInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StaffProfessionalInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StaffProfessionalInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
