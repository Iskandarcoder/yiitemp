<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dead */

$this->title = Yii::t('app', 'Create Dead');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dead-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
