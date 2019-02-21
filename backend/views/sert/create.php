<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sert */

$this->title = Yii::t('app', 'Create Sert');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Serts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
