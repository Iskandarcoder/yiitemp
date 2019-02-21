<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PnPravo */

$this->title = Yii::t('app', 'Create Pn Pravo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pn Pravos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pn-pravo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
