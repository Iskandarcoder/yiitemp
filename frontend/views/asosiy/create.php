<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Asosiy */

//$this->title = Yii::t('app', 'Create Asosiy');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Asosiys'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asosiy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
