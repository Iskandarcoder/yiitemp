<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AnketaNewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anketa-new-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'p_id') ?>

    <?= $form->field($model, 'p_guid') ?>

    <?= $form->field($model, 'p_dockind') ?>

    <?= $form->field($model, 'p_division') ?>

    <?= $form->field($model, 'p_citizen') ?>

    <?php // echo $form->field($model, 'p_pk') ?>

    <?php // echo $form->field($model, 'p_surnamec') ?>

    <?php // echo $form->field($model, 'p_namec') ?>

    <?php // echo $form->field($model, 'p_patronymc') ?>

    <?php // echo $form->field($model, 'p_surnamel') ?>

    <?php // echo $form->field($model, 'p_namel') ?>

    <?php // echo $form->field($model, 'p_patronyml') ?>

    <?php // echo $form->field($model, 'p_birth') ?>

    <?php // echo $form->field($model, 'p_birthcomp') ?>

    <?php // echo $form->field($model, 'p_sex') ?>

    <?php // echo $form->field($model, 'p_nation') ?>

    <?php // echo $form->field($model, 'p_surnameold') ?>

    <?php // echo $form->field($model, 'p_nameold') ?>

    <?php // echo $form->field($model, 'p_patronymold') ?>

    <?php // echo $form->field($model, 'p_countryb') ?>

    <?php // echo $form->field($model, 'p_regionb') ?>

    <?php // echo $form->field($model, 'p_districtb') ?>

    <?php // echo $form->field($model, 'p_birthb') ?>

    <?php // echo $form->field($model, 'p_birthe') ?>

    <?php // echo $form->field($model, 'p_doctypeb') ?>

    <?php // echo $form->field($model, 'p_seryb') ?>

    <?php // echo $form->field($model, 'p_numberb') ?>

    <?php // echo $form->field($model, 'p_datebegb') ?>

    <?php // echo $form->field($model, 'p_issuedbyb') ?>

    <?php // echo $form->field($model, 'p_country') ?>

    <?php // echo $form->field($model, 'p_region') ?>

    <?php // echo $form->field($model, 'p_district') ?>

    <?php // echo $form->field($model, 'p_place') ?>

    <?php // echo $form->field($model, 'p_street') ?>

    <?php // echo $form->field($model, 'p_certiftype') ?>

    <?php // echo $form->field($model, 'p_house') ?>

    <?php // echo $form->field($model, 'p_korpus') ?>

    <?php // echo $form->field($model, 'p_flat') ?>

    <?php // echo $form->field($model, 'p_address') ?>

    <?php // echo $form->field($model, 'p_marital') ?>

    <?php // echo $form->field($model, 'p_dateendb') ?>

    <?php // echo $form->field($model, 'p_countryout') ?>

    <?php // echo $form->field($model, 'p_addressout') ?>

    <?php // echo $form->field($model, 'p_cause') ?>

    <?php // echo $form->field($model, 'p_reasonb') ?>

    <?php // echo $form->field($model, 'p_reasonfull') ?>

    <?php // echo $form->field($model, 'p_dateout') ?>

    <?php // echo $form->field($model, 'p_dateenter') ?>

    <?php // echo $form->field($model, 'p_photo') ?>

    <?php // echo $form->field($model, 'p_work') ?>

    <?php // echo $form->field($model, 'p_datesent') ?>

    <?php // echo $form->field($model, 'p_status') ?>

    <?php // echo $form->field($model, 'p_lan') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
