<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Vkus */

//$this->title = Yii::t('app', 'Create Vkus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vkuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vkus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelInrelative' => $modelInrelative,
        'modelOutrelative' => $modelOutrelative,
    ]) ?>

</div>
