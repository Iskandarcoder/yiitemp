<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PotvLich */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Potv Lich',
]) . $model->p_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potv Liches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p_id, 'url' => ['view', 'id' => $model->p_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="potv-lich-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
