<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\LishSv */

$this->title = Yii::t('app', 'Create Lish Sv');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lish Svs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lish-sv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
