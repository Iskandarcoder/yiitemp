<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reg_num')->textInput() ?>

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

    <?= $form->field($model, 'birth_place_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document_type_id')->textInput() ?>

    <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_begin_document')->textInput() ?>

    <?= $form->field($model, 'date_endocument')->textInput() ?>

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

    <?= $form->field($model, 'living_place_latin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_foreign_country_id')->textInput() ?>

    <?= $form->field($model, 'living_foreign_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'begin_date')->textInput() ?>

    <?= $form->field($model, 'arrival_date')->textInput() ?>

    <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_citizenship_id')->textInput() ?>

    <?= $form->field($model, 'doc_adinfo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'foundation_cons_acc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_uzb_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senstatus')->textInput() ?>

    <?= $form->field($model, 'endate')->textInput() ?>

    <?= $form->field($model, 'reason_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adinfo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consular_account_type')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
