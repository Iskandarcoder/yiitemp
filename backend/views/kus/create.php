<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kus */

$this->title = 'Create Kus';
$this->params['breadcrumbs'][] = ['label' => 'Kuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-container">


    <?= $this->render('_form', [
        'model' => $model,
        'modelInrelative' => $modelInrelative,
        'modelOutrelative' => $modelOutrelative,
    ]) ?>

</div>
