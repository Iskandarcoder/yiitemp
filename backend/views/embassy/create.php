<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Embassy */

$this->title = 'Create Embassy';
$this->params['breadcrumbs'][] = ['label' => 'Embassies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="embassy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
