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
<div class="vkus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
