<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Vkus */

$this->title = Yii::t('app', 'Create Vkus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vkuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-container">
   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
