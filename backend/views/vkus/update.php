<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Vkus */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Vkus',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vkuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="page-container">

    <center><h1><?= Html::encode('Tahrirlash') ?></h1></center>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
