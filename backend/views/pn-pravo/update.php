<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PnPravo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Pn Pravo',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pn Pravos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pn-pravo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
