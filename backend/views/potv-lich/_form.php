<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PotvLich */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title" style="text-align: center;font-weight: bold;">
            Doimiy konsullik hisobiga olish
            </h3>
            <hr>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'p_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_dockind')->textInput() ?>

    <?= $form->field($model, 'p_division')->textInput() ?>

    <?= $form->field($model, 'p_citizen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_pk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_surnamec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_namec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_patronymc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_surnameL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_nameL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_patronymL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_birth')->textInput() ?>

    <?= $form->field($model, 'p_birthcomp')->textInput() ?>

    <?= $form->field($model, 'p_sex')->textInput() ?>

    <?= $form->field($model, 'p_nation')->textInput() ?>

    <?= $form->field($model, 'p_surnameold')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_nameold')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_patronymold')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_countryb')->textInput() ?>

    <?= $form->field($model, 'p_regionb')->textInput() ?>

    <?= $form->field($model, 'p_districtb')->textInput() ?>

    <?= $form->field($model, 'p_birthb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_birthe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_doctypeb')->textInput() ?>

    <?= $form->field($model, 'p_seryb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_numberb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_issuedbyb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_datebegb')->textInput() ?>

    <?= $form->field($model, 'p_country')->textInput() ?>

    <?= $form->field($model, 'p_region')->textInput() ?>

    <?= $form->field($model, 'p_district')->textInput() ?>

    <?= $form->field($model, 'p_place')->textInput() ?>

    <?= $form->field($model, 'p_street')->textInput() ?>

    <?= $form->field($model, 'p_house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_korpus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_flat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_dateenter')->textInput() ?>

    <?= $form->field($model, 'p_MVD_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_surnameeng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_nameeng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_birthplaceeng')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>