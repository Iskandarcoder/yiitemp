<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kus */

$this->title = 'Update Kus: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-container">

    <center><h1><?= Html::encode('Tahrirlash') ?></h1></center>

    <?= $this->render('_form', [
        'model' => $model,
        'modelInrelative' => $modelInrelative,
        'modelOutrelative' => $modelOutrelative,
    ]) ?>

</div>
