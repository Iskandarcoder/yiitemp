<?php

namespace frontend\controllers;

use Yii;
use backend\models\Kus;
use frontend\models\KusSearch;
//use yii\web\Controller;
use frontend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\SpRegion;
use backend\models\SpDistrict;
use backend\models\SpPlace;
use common\models\CaptchaCode;

/**
 * KusController implements the CRUD actions for Kus model.
 */
class KusController extends Basecontroller
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

    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Lists all Kus models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KusSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kus model.
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
     * Creates a new Kus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kus();
        $model->setRandomString();

        if ($model->load(Yii::$app->request->post())) {

           // $model->id = $model->setRandomString->id;

            $model->arrival_date = $model->begin_date;
            

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Kus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {


            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Kus model.
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
     * Finds the Kus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Kus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kus::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionRegions(){
        //$country_id = 182;
        $result = "";
        $country_id = Yii::$app->request->queryParams['sp_country_id'];
        $name = 'sp_name_'.Yii::$app->language;
        $regions = SpRegion::find()->where(['sp_country_id'=>$country_id])->select(['sp_id', $name])->all();
        if ($regions) {
            foreach ($regions as $region) {
                $result .= "<option value='".$region->sp_id."'>".$region->$name."</option>";
            }
        }
        echo $result;
        Yii::$app->end();
    }

    public function actionDistricts(){
       
        //$region_id = 1;
        $result = "";
        $region_id = Yii::$app->request->queryParams['sp_id'];
        $name = 'sp_name_'.Yii::$app->language;
        $districts = SpDistrict::find()->where(['sp_region'=>$region_id])->select(['sp_id', $name])->all();
        if ($districts) {
            foreach ($districts as $district) {
                $result .= "<option value='".$district->sp_id."'>".$district->$name."</option>";
            }
        }
        echo $result;
        Yii::$app->end();
    }

    public function actionSpPlaces(){
        $result = "";
        $district_id = Yii::$app->request->queryParams['sp_district'];
        $name = 'sp_name_'.Yii::$app->language;
        $placess = SpPlace::find()->where(['sp_district'=>$city_id])->select(['sp_id', $name])->all();
        if ($placess) {
            foreach ($placess as $places) {
                $result .= "<option value='".$places->sp_id."'>".$places->$name."</option>";
            }
        }
        echo $result;
        Yii::$app->end();
    }
}
