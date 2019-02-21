<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Chiqish */

$this->title = Yii::t('app', 'Create Chiqish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chiqishes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chiqish-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
