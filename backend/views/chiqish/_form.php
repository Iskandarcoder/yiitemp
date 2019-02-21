<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Chiqish */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chiqish-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'division_id')->textInput() ?>

    <?= $form->field($model, 'pinpp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname_cyrillic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_cyrillic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronym_cyrillic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronym_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex_id')->textInput() ?>

    <?= $form->field($model, 'nationality_id')->textInput() ?>

    <?= $form->field($model, 'marital_status_id')->textInput() ?>

    <?= $form->field($model, 'birth_country_id')->textInput() ?>

    <?= $form->field($model, 'birth_region_id')->textInput() ?>

    <?= $form->field($model, 'birth_district_id')->textInput() ?>

    <?= $form->field($model, 'birth_place_id')->textInput() ?>

    <?= $form->field($model, 'birth_place_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document_type_id')->textInput() ?>

    <?= $form->field($model, 'doc_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_begin_document')->textInput() ?>

    <?= $form->field($model, 'date_end_document')->textInput() ?>

    <?= $form->field($model, 'document_div_id')->textInput() ?>

    <?= $form->field($model, 'document_div_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_country_id')->textInput() ?>

    <?= $form->field($model, 'living_region_id')->textInput() ?>

    <?= $form->field($model, 'living_district_id')->textInput() ?>

    <?= $form->field($model, 'living_place_id')->textInput() ?>

    <?= $form->field($model, 'living_street_id')->textInput() ?>

    <?= $form->field($model, 'living_block')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_flat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_out')->textInput() ?>

    <?= $form->field($model, 'arrival_country_id')->textInput() ?>

    <?= $form->field($model, 'appeal_type')->textInput() ?>

    <?= $form->field($model, 'living_foreign_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application_date')->textInput() ?>

    <?= $form->field($model, 'decree_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'decree_date')->textInput() ?>

    <?= $form->field($model, 'document_delivery_consul_date')->textInput() ?>

    <?= $form->field($model, 'reference_exit_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reference_exit_date')->textInput() ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'living_uzb_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_info')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
