<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeRelative */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Type Relative',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Relatives'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="type-relative-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
