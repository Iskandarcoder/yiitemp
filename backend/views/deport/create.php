<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Deport */

$this->title = Yii::t('app', 'Create Deport');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
