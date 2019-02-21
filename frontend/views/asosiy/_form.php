<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Asosiy */
/* @var $form yii\widgets\ActiveForm */
?>

<style type="text/css">
  .fileinput-cancel-button {
    display: none;
  }
  .fileinput-upload-button {
    display: none;
  }
  .fileinput-remove-button {
    display: none;
  }
</style>

<div class="container well well-lg">
 <h4><?= Yii::t('app', 'O`zbekiston Respublikasining horijda doimiy yashovchi fuqarolarini ro`yhatga olish uchun shaxsiy ma\'lumotlarni kiritish'); ?></h4>
            <br/>
            <br/>
    

   <div class="board">
          <ul class="nav nav-tabs">
                <div class="liner"></div>
                <li rel-index="0"  class="active">
                    <a  id="s1" href="#step-1" class="btn media-links" aria-controls="step-1" role="tab" data-toggle="tab">
                      <span><i class="fa fa-user media-imgs"></i></span>
                    </a>
                </li>
                <li rel-index="1">
                    <a  id="s2" href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                      <span><i class="fa fa-vcard-o"></i></span>
                    </a>
                </li>
                <li  rel-index="2">
                    <a  id="s3" href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                      <span><i class="fa fa-home"></i></span>
                    </a>
                </li>
                <li rel-index="3">
                    <a  id="s4" href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                      <span><i class="fa fa-file-text-o"></i></span>
                    </a>
                </li>
            </ul>
        </div>
</br>
</br>

        <?php $form = ActiveForm::begin(); ?>
        <div class="tab-content">
             <div  class="tab-pane active" id="step-1">

                <h3 class="step-txt1"><?= Yii::t('app', 'Asosiy ma\'lumotlar'); ?></h3>    

                <?= $form->field($model, 'USERNAME')->textInput(['maxlength' => true]) ?>
                
                <?= $form->field($model, 'REG_DATE')->textInput() ?>

                <?= $form->field($model, 'EMBASSY')->textInput() ?>

                <?= $form->field($model, 'SRC_REGNO')->textInput() ?>

                <?= $form->field($model, 'STATE_ID')->textInput() ?>

                <?= $form->field($model, 'FULL_NAME')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'OTHER_NAME')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'DOB')->textInput() ?>

                <?= $form->field($model, 'TUG_JOYI')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'POB')->textInput() ?>

        </div>    <!-- 1-step tugadi shu yerda --> 

                <?= $form->field($model, 'SEX')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'WORK_PLACE')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'ADDRESS')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'MARITAL')->textInput() ?>

                <?= $form->field($model, 'VISA_TYPE')->textInput() ?>

                <?= $form->field($model, 'DATE_FROM')->textInput() ?>

                <?= $form->field($model, 'DATE_UPTO')->textInput() ?>

                <?= $form->field($model, 'FOREIGN_AD')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'OFFENCE_TY')->textInput() ?>

                <?= $form->field($model, 'REMARKS')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'Q_MALUMOT')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'FOTO')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'XOLAT')->textInput() ?>

                <?= $form->field($model, 'RASM')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'PSP_SERIAL')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'PSP_NUMBER')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'PSP_AUTHOR')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'PSP_ISSDAT')->textInput() ?>

                <?= $form->field($model, 'PSP_TERM')->textInput() ?>

                <?= $form->field($model, 'TULOV')->textInput() ?>

                <?= $form->field($model, 'FAKT_RAS')->textInput() ?>

                <?= $form->field($model, 'KOD1')->textInput() ?>

                <?= $form->field($model, 'KOD2')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'KOD3')->textInput() ?>

                <?= $form->field($model, 'NOM_SPRAV')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'YASH_VIL')->textInput() ?>

                <?= $form->field($model, 'YASH_TUM')->textInput() ?>

                <?= $form->field($model, 'REQ_TYPE')->textInput() ?>

                <?= $form->field($model, 'KOX')->textInput() ?>

                <?= $form->field($model, 'TASDIQ_S')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'JAVOB')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'J_DATA')->textInput() ?>

                <?= $form->field($model, 'ISSUE_DAT')->textInput() ?>

                <?= $form->field($model, 'EXPIRE_DAT')->textInput() ?>

                <?= $form->field($model, 'HAMROH')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'SERT_RAQ')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'HAMROH2')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'HAMROH3')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'DOC1')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'DOC2')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'DOC3')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'KU_MVNOM')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'KU_MVDAT')->textInput() ?>

                <?= $form->field($model, 'MVKU_NOM')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'MVKU_DAT')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
