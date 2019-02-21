<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_mvd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'division_id')->textInput() ?>

    <?= $form->field($model, 'pinpp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname_cyrillic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_cyrillic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronym_cyrillic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronym_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput() ?>

    <?= $form->field($model, 'sex_id')->textInput() ?>

    <?= $form->field($model, 'nationality_id')->textInput() ?>

    <?= $form->field($model, 'marital_status_id')->textInput() ?>

    <?= $form->field($model, 'birth_country_id')->textInput() ?>

    <?= $form->field($model, 'birth_region_id')->textInput() ?>

    <?= $form->field($model, 'birth_district_id')->textInput() ?>

    <?= $form->field($model, 'birth_place_id')->textInput() ?>

    <?= $form->field($model, 'birth_street_id')->textInput() ?>

    <?= $form->field($model, 'birth_block')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_flat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_place_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document_type')->textInput() ?>

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

    <?= $form->field($model, 'living_foreign_country_id')->textInput() ?>

    <?= $form->field($model, 'living_foreign_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrival_reason_id')->textInput() ?>

    <?= $form->field($model, 'arrival_date')->textInput() ?>

    <?= $form->field($model, 'cause_id')->textInput() ?>

    <?= $form->field($model, 'work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_date')->textInput() ?>

    <?= $form->field($model, 'validity_date_certificate')->textInput() ?>

    <?= $form->field($model, 'living_uzb_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'send_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_mvd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_mvd')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'print_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annul_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oplata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rasxod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nazorat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ism')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sharif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tug_Sana')->textInput() ?>

    <?= $form->field($model, 'surname_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_eng')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
