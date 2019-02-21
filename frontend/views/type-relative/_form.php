<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeRelative */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-relative-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uz_type_relative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_type_relative')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
