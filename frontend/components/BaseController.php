<?php
namespace frontend\components;
use Yii;
use yii\web\Controller;
class BaseController extends Controller
{
	public function __construct($id, $module, $config = array()) {
		
		$session = Yii::$app->session;
		$language = $session->get('language');
		$defaultLang = Yii::$app->language;
		if ($language) {
			Yii::$app->language = $language;
		}
		else {
			$session->set('language', $defaultLang);
			Yii::$app->language = $defaultLang;
		}
		$get = Yii::$app->request->get();
		if (!empty($get) and isset($get['language'])) {
			$session->set('language', $get['language']);
			Yii::$app->language = $get['language'];
		}
		parent::__construct($id, $module, $config);
	}
}
?>