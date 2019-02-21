<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AsosiySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asosiy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'REG_DATE') ?>

    <?= $form->field($model, 'EMBASSY') ?>

    <?= $form->field($model, 'USERNAME') ?>

    <?= $form->field($model, 'SRC_REGNO') ?>

    <?php // echo $form->field($model, 'STATE_ID') ?>

    <?php // echo $form->field($model, 'FULL_NAME') ?>

    <?php // echo $form->field($model, 'OTHER_NAME') ?>

    <?php // echo $form->field($model, 'DOB') ?>

    <?php // echo $form->field($model, 'TUG_JOYI') ?>

    <?php // echo $form->field($model, 'POB') ?>

    <?php // echo $form->field($model, 'SEX') ?>

    <?php // echo $form->field($model, 'WORK_PLACE') ?>

    <?php // echo $form->field($model, 'ADDRESS') ?>

    <?php // echo $form->field($model, 'MARITAL') ?>

    <?php // echo $form->field($model, 'VISA_TYPE') ?>

    <?php // echo $form->field($model, 'DATE_FROM') ?>

    <?php // echo $form->field($model, 'DATE_UPTO') ?>

    <?php // echo $form->field($model, 'FOREIGN_AD') ?>

    <?php // echo $form->field($model, 'OFFENCE_TY') ?>

    <?php // echo $form->field($model, 'REMARKS') ?>

    <?php // echo $form->field($model, 'Q_MALUMOT') ?>

    <?php // echo $form->field($model, 'FOTO') ?>

    <?php // echo $form->field($model, 'XOLAT') ?>

    <?php // echo $form->field($model, 'RASM') ?>

    <?php // echo $form->field($model, 'PSP_SERIAL') ?>

    <?php // echo $form->field($model, 'PSP_NUMBER') ?>

    <?php // echo $form->field($model, 'PSP_AUTHOR') ?>

    <?php // echo $form->field($model, 'PSP_ISSDAT') ?>

    <?php // echo $form->field($model, 'PSP_TERM') ?>

    <?php // echo $form->field($model, 'TULOV') ?>

    <?php // echo $form->field($model, 'FAKT_RAS') ?>

    <?php // echo $form->field($model, 'KOD1') ?>

    <?php // echo $form->field($model, 'KOD2') ?>

    <?php // echo $form->field($model, 'KOD3') ?>

    <?php // echo $form->field($model, 'NOM_SPRAV') ?>

    <?php // echo $form->field($model, 'YASH_VIL') ?>

    <?php // echo $form->field($model, 'YASH_TUM') ?>

    <?php // echo $form->field($model, 'REQ_TYPE') ?>

    <?php // echo $form->field($model, 'KOX') ?>

    <?php // echo $form->field($model, 'TASDIQ_S') ?>

    <?php // echo $form->field($model, 'JAVOB') ?>

    <?php // echo $form->field($model, 'J_DATA') ?>

    <?php // echo $form->field($model, 'ISSUE_DAT') ?>

    <?php // echo $form->field($model, 'EXPIRE_DAT') ?>

    <?php // echo $form->field($model, 'HAMROH') ?>

    <?php // echo $form->field($model, 'SERT_RAQ') ?>

    <?php // echo $form->field($model, 'HAMROH2') ?>

    <?php // echo $form->field($model, 'HAMROH3') ?>

    <?php // echo $form->field($model, 'DOC1') ?>

    <?php // echo $form->field($model, 'DOC2') ?>

    <?php // echo $form->field($model, 'DOC3') ?>

    <?php // echo $form->field($model, 'KU_MVNOM') ?>

    <?php // echo $form->field($model, 'KU_MVDAT') ?>

    <?php // echo $form->field($model, 'MVKU_NOM') ?>

    <?php // echo $form->field($model, 'MVKU_DAT') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
