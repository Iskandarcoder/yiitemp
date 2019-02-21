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
use backend\models\SpStreet;
use common\models\CaptchaCode;
use yii\web\UploadedFile;
use backend\models\InRelative;
use backend\models\OutRelative;
use backend\models\Model;



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

	public function actionBarcode($id)
	{
		return $this->render('barcode', [
			'id' => $id,
		]);
	}

	public function actionPdf($id)
	{
		$model = $this->findModel($id);

		// get your HTML raw content without any layouts or scripts
		if(Yii::$app->language == 'uz'){
			$content = $this->renderPartial('_uzpdf', [
				'model' => $model,
			]);
		}else{
			$content = $this->renderPartial('_pdf', [
				'model' => $model,
			]);
		}

		$pdf = Yii::$app->pdf;
		$pdf->content = $content;

		// return the pdf output as per the destination setting
		Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;

		$headers = Yii::$app->response->headers;
		$headers->add('Content-Type', 'application/pdf');
		return $pdf->render();
	}

	public function actionExportPdf($id)
	{
		$model = $this->findModel($id);

		if(Yii::$app->language == 'uz'){
			$content = $this->renderPartial('_uzpdf', [
			'model' => $model,
		]);			
		}else{
			$content = $this->renderPartial('_pdf', [
			'model' => $model,
		]);	
		}

		

		$pdf = Yii::$app->pdf;
		$pdf->content = $content;

		// return the pdf output as per the destination setting
		Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;

		// $pdf->destination = \kartik\mpdf\Pdf::DEST_DOWNLOAD;

		$name = 'kus.pdf';
		$path = Yii::getAlias('@frontend/web/pdf/').$name;

		$pdf->output($content, $path, \kartik\mpdf\Pdf::DEST_FILE);

		return $this->redirect(['pdf', 'id' => $id]);
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
		$modelInrelative = [new InRelative];
		$modelOutrelative = [new OutRelative];

		//print_r($modelOutrelative);die();

		if ($model->load(Yii::$app->request->post())) {

			
			$modelInrelative = Model::createMultiple(InRelative::classname());
			Model::loadMultiple($modelInrelative, Yii::$app->request->post());

			$modelOutrelative = Model::createMultiple(OutRelative::classname());
			Model::loadMultiple($modelOutrelative, Yii::$app->request->post());


			// validate all models
			// $valid = $modelCustomer->validate();
			// $valid = Model::validateMultiple($modelInrelative) && $valid;


			$model->arrival_date = $model->begin_date;
			$model->status = '0';
			$last_num = Kus::find()->select('max(reg_num)')->scalar();
			$model->reg_num = $last_num + 1;
			$model->consular_account_type = '0';
			$model->living_country_id = '182';
			$model->creation_date = date('Y-m-d h:m:s');
			$model->endate = date("Y-m-d h:m:s",strtotime("+3 Months"));
			$model->senstatus = 1;

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
							return $this->redirect(['export-pdf', 'id' => $model->id]);
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

	public function actionRegions($id){
		//$country_id = 182;
		// vd($id);
		$result = "";
		// $country_id = Yii::$app->request->queryParams['sp_country_id'];
		$name = 'sp_name_'.Yii::$app->language;
		$regions = SpRegion::find()
						->select(['sp_id', $name])
						->where(['sp_country_id'=>$id])
						->all();
		$result .= "<option>---</option>";
		if ($regions) {
			foreach ($regions as $region) {
				$result .= "<option value='".$region->sp_id."'>".$region->$name."</option>";
			}
		}
		// vd($result);
		return $result;
		// echo $result;
		// Yii::$app->end();
	}

	public function actionDistricts($id)
	{
		// vd($id);
		//$region_id = 1;
		$result = "";
		// $region_id = Yii::$app->request->queryParams['sp_id'];
		$name = 'sp_name_'.Yii::$app->language;
		$districts = SpDistrict::find()->where(['sp_region'=>$id])->select(['sp_id', $name])->all();
		$result .= "<option>---</option>";
		if ($districts) {
			foreach ($districts as $district) {
				$result .= "<option value='".$district->sp_id."'>".$district->$name."</option>";
			}
		}
		return $result;
	}

	public function actionSpPlaces($id)
	{
		$result = "";
		// $district_id = Yii::$app->request->queryParams['sp_district'];
		$name = 'sp_name_'.Yii::$app->language;
		$placess = SpPlace::find()->where(['sp_district'=>$id])->select(['sp_id', $name])->all();
		$result .= "<option>---</option>";
		if ($placess) {
			foreach ($placess as $places) {
				$result .= "<option value='".$places->sp_id."'>".$places->$name."</option>";
			}
		}
		return $result;
	}

	public function actionStreet($id)
	{
		$result = "";
		// $district_id = Yii::$app->request->queryParams['sp_district'];
		$name = 'sp_name_'.Yii::$app->language;
		$placess = SpStreet::find()->where(['sp_district'=>$id])->select(['sp_id', $name])->all();
		$result .= "<option>---</option>";
		if ($placess) {
			foreach ($placess as $places) {
				$result .= "<option value='".$places->sp_id."'>".$places->$name."</option>";
			}
		}
		return $result;
	}
}
