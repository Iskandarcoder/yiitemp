<?php

namespace backend\controllers;

use Yii;
use backend\models\Vkus;
use backend\models\VkusSearch;
//use yii\web\Controller;
use frontend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\SpRegion;
use backend\models\SpDistrict;
use backend\models\SpPlace;
use yii\helpers\Url;
use backend\models\SpStreet;

/**
 * VkusController implements the CRUD actions for Vkus model.
 */
class VkusController extends Basecontroller
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
     * Lists all Vkus models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VkusSearch();
        if(Yii::$app->user->identity->role_id != '1'){

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['VkusSearch']['division_id'] = $division;

        $dataProvider = $searchModel->search($params);
        }

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vkus model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Vkus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vkus();
        $model->division_id = Yii::$app->user->identity->dvision_id;
        if ($model->load(Yii::$app->request->post())) {
            $model->living_country_id = '182';
            $model->arrival_date = $model->begin_date;
            $model->consular_account_type = '0';
            $model->living_country_id = '182';
            $model->creation_date = date('Y-m-d h:m:s');
            $model->endate = date("Y-m-d h:m:s",strtotime("+3 Months"));
            $model->senstatus = 1;

            $img = UploadedFile::getInstance($model,'photo');
            $imgData =file_get_contents($img->tempName);
            
            $model->photo = $imgData;

            $model->save();
            return $this->redirect(['print', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Vkus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            $img = UploadedFile::getInstance($model,'photo');
            $imgData =file_get_contents($img->tempName);
            
            $model->photo = $imgData;

             $model->save();
            return $this->redirect(['print', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Vkus model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vkus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Vkus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vkus::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPrint($id)
    {
        return $this->render('print', [
            'model' => $this->findModel($id),
        ]);
    }
}
