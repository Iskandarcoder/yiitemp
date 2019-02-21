<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TypeRelative */

$this->title = Yii::t('app', 'Create Type Relative');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Relatives'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-relative-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
