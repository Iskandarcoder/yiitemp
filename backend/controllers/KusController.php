<?php

namespace backend\controllers;

use Yii;
use backend\models\Kus;
use backend\models\KusSearch;
//use yii\web\Controller;
use frontend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\SpRegion;
use backend\models\User;
use backend\models\SpDistrict;
use backend\models\SpPlace;
use backend\models\SpStreet;
use yii\filters\AccessControl;
use backend\models\InRelative;
use backend\models\OutRelative;
use backend\models\Model;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

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
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
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
        if(Yii::$app->user->identity->role_id != '1'){

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['KusSearch']['division_id'] = $division;

        $dataProvider = $searchModel->search($params);
        }

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
        $modelInrelative = [new InRelative];
        $modelOutrelative = [new OutRelative];

        $model->division_id = Yii::$app->user->identity->dvision_id;

        if ($model->load(Yii::$app->request->post())) {

            $modelInrelative = Model::createMultiple(InRelative::classname());
            Model::loadMultiple($modelInrelative, Yii::$app->request->post());

            $modelOutrelative = Model::createMultiple(OutRelative::classname());
            Model::loadMultiple($modelOutrelative, Yii::$app->request->post());


            
            $model->arrival_date = $model->begin_date;
            $model->living_country_id = '182';
            $model->creation_date = date('Y-m-d h:m:s');
            $model->endate = date("Y-m-d h:m:s",strtotime("+3 Months"));
            $model->consular_account_type = '0';
            $last_num = Kus::find()->select('max(reg_num)')->scalar();
            $model->reg_num = $last_num + 1;
            $model->senstatus = 1;
            //$model->status = '0';
            $img = UploadedFile::getInstance($model,'photo');
            
            $imgData =file_get_contents($img->tempName);
            $model->photo = $imgData;
            


            if ($model->save()) {
                $valid = true;
                foreach ($modelInrelative as $key => $modelI) {
                    $modelI->kus_id = $model->id;
                    $valid = $valid && $modelI->validate();

                }

                foreach ($modelOutrelative as $key => $modelO) {
                    $modelO->kus_id = $model->id;
                    $valid = $valid && $modelO->validate();
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

                        foreach ($modelOutrelative as $modelO) {
                            if (!($flag = $modelO->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
            
                        if ($flag) {
                            $transaction->commit();
                            return $this->redirect(['print', 'id' => $model->id]);
                            //return $this->redirect(['export-pdf', 'id' => $model->id]);
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
                            $modelAddress->customer_id = $modelCustomer->id;
                            if (! ($flag = $modelin->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        foreach ($modelOutrelative as $modelout) {
                            $modelAddress->customer_id = $modelCustomer->id;
                            if (! ($flag = $modelout->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelCustomer->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelInrelative' => (empty($modelInrelative)) ? [new InRelative] : $modelInrelative,
                'modelOutrelative' => (empty($modelOutrelative)) ? [new OutRelative] : $modelOutrelative
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
        $modelInrelative = $model->inRelative;
        $modelOutrelative = $model->outRelative;

        if ($model->load(Yii::$app->request->post()) ) {


            $oldIDs = ArrayHelper::map($modelInrelative, 'id', 'id');
            $oldIDsout = ArrayHelper::map($modelOutrelative, 'id', 'id');
            $modelInrelative = Model::createMultiple(InRelative::classname(), $modelInrelative);
            $modelOutrelative = Model::createMultiple(OutRelative::classname(), $modelOutrelative);
            Model::loadMultiple($modelInrelative, Yii::$app->request->post());
            Model::loadMultiple($modelOutrelative, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelInrelative, 'id', 'id')));
            $deletedIDsout = array_diff($oldIDsout, array_filter(ArrayHelper::map($modelOutrelative, 'id', 'id')));

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelInrelative) && $valid;

            $img = UploadedFile::getInstance($model,'photo');
           
            $imgData =file_get_contents($img->tempName);
            $model->photo = $imgData;
           
            


            if ($model->save()) {
                $valid = true;
                foreach ($modelInrelative as $key => $modelI) {
                    $modelI->kus_id = $model->id;
                    $valid = $valid && $modelI->validate();

                }

                foreach ($modelOutrelative as $key => $modelO) {
                    $modelO->kus_id = $model->id;
                    $valid = $valid && $modelO->validate();
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

                        foreach ($modelOutrelative as $modelO) {
                            if (!($flag = $modelO->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
            
                        if ($flag) {
                            $transaction->commit();
                            return $this->redirect(['print', 'id' => $model->id]);
                            //return $this->redirect(['export-pdf', 'id' => $model->id]);
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
                            $modelAddress->customer_id = $modelCustomer->id;
                            if (! ($flag = $modelin->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        foreach ($modelOutrelative as $modelout) {
                            $modelAddress->customer_id = $modelCustomer->id;
                            if (! ($flag = $modelout->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelCustomer->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'modelInrelative' => (empty($modelInrelative)) ? [new InRelative] : $modelInrelative,
                'modelOutrelative' => (empty($modelOutrelative)) ? [new OutRelative] : $modelOutrelative
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


    public function actionPrint($id)
    {
        return $this->render('print', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionEmail()
    {
        Yii::$app->mailer->compose()
        ->setFrom('iskandarcoder@gmail.com')
        ->setTo('iskandarcoder@mail.ru')
        ->setSubject('Message subject')
        ->setTextBody('Plain text content')
        ->setHtmlBody('<b>HTML content</b>')
        ->send();
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
}
