<?php

namespace backend\controllers;

use Yii;
use backend\models\AnketaNew;
use backend\models\AnketaNewSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\InRelative;
use backend\models\User;
use backend\models\Model;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;


/**
 * AnketaNewController implements the CRUD actions for AnketaNew model.
 */
class AnketaNewController extends Controller
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
     * Lists all AnketaNew models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnketaNewSearch();

        if(Yii::$app->user->identity->role_id != '1'){

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['AnketaNewSearch']['p_division'] = $division;

        $dataProvider = $searchModel->search($params);
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AnketaNew model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

     public function actionPrint($id)
    {
        return $this->render('print', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AnketaNew model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AnketaNew();
        $model->setRandomString();
        $model->p_birthcomp = '0';
        $model->p_division = Yii::$app->user->identity->dvision_id;
        $modelInrelative = [new InRelative];

        if ($model->load(Yii::$app->request->post())) {

            $modelInrelative = Model::createMultiple(InRelative::classname());
            Model::loadMultiple($modelInrelative, Yii::$app->request->post());

            $img = UploadedFile::getInstance($model,'p_photo');
            $imgData =file_get_contents($img->tempName);
            
            $model->p_photo = $imgData;
            $model->p_country = '182';
            $model->p_certiftype = '2';
            $model->p_citizen = '1';
            $model->p_datesent = date('Y-m-d H:i:s');

            if ($model->save()) {
                $valid = true;
                foreach ($modelInrelative as $key => $modelI) {
                    $modelI->sert_id = $model->p_id;
                    //$valid = $valid && $modelI->validate();
                }

               

                if ($valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        $flag = false;

                        foreach ($modelInrelative as $modelI) {
                            if (!($flag = $modelI->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        
            
                        if ($flag) {
                            $transaction->commit();
                            return $this->redirect(['export-pdf', 'id' => $model->p_id]);
                        }
                    } catch (Exception $e) {
                        $transaction->rollBack();
                    }
                }

            }

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();

                try {
                    if ($flag = $modelCustomer->save(false)) {
                        foreach ($modelInrelative as $modelin) {
                            $modelAddress->customer_id = $modelCustomer->p_id;
                            if (! ($flag = $modelin->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelCustomer->p_id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

            return $this->redirect(['view', 'id' => $model->p_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelInrelative' => (empty($modelInrelative)) ? [new InRelative] : $modelInrelative,
            ]);
        }
    }

    /**
     * Updates an existing AnketaNew model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelInrelative = $model->inRelative;


        if ($model->load(Yii::$app->request->post())) {

            $img = UploadedFile::getInstance($model,'p_photo');
            $imgData =file_get_contents($img->tempName);
            
            $model->p_photo = $imgData;

            $oldIDs = ArrayHelper::map($modelInrelative, 'sert_id', 'sert_id');
            $modelInrelative = Model::createMultiple(InRelative::classname(), $modelInrelative);
            Model::loadMultiple($modelInrelative, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelInrelative, 'sert_id', 'sert_id')));

            $valid = $model->validate();
            $valid = Model::validateMultiple($modelInrelative) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (!empty($deletedIDs)) {
                            InRelative::deleteAll(['sert_id' => $deletedIDs]);
                        }
                        foreach ($modelInrelative as $modelIn) {
                            $modelIn->sert_id = $model->p_id;
                            if (! ($flag = $modelIn->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->p_id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }



        } else {
            return $this->render('update', [
                'model' => $model,
                'modelInrelative' => (empty($modelInrelative)) ? [new InRelative] : $modelInrelative
            ]);
        }
    }

    /**
     * Deletes an existing AnketaNew model.
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
     * Finds the AnketaNew model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AnketaNew the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AnketaNew::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSpiska()
    {
        $searchModel = new AnketaNewSearch();
        $params = Yii::$app->request->queryParams;

        $params['AnketaNewSearch']['p_districtb'] = '1417';

        $dataProvider = $searchModel->search($params);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionMonitor()
    {
        $searchModel = new AnketaNewSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('monitor', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


}
