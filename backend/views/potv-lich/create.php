<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PotvLich */

$this->title = Yii::t('app', 'Create Potv Lich');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potv Liches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potv-lich-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
