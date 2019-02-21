<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AnketaNew */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Anketa New',
]) . $model->p_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Anketa News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p_id, 'url' => ['view', 'id' => $model->p_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="anketa-new-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelInrelative' => $modelInrelative,
        
    ]) ?>

</div>
