<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\KusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <?= $form->field($model, 'id') ?>
        </div>
    </div>

    <!-- <?= $form->field($model, 'reg_num') ?>

    <?= $form->field($model, 'division_id') ?>

    <?= $form->field($model, 'pinpp') ?>

    <?= $form->field($model, 'surname_cyrillic') ?> -->

    <?php // echo $form->field($model, 'name_cyrillic') ?>

    <?php // echo $form->field($model, 'patronym_cyrillic') ?>
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <?php  echo $form->field($model, 'surname_latin') ?>
        </div>
        <div class="col-md-4 col-sm-4">
            <?php  echo $form->field($model, 'name_latin') ?>
        </div>
        <div class="col-md-4 col-sm-4">
            <?php  echo $form->field($model, 'patronym_latin') ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <?= $form->field($model, 'birth_date')
                ->widget(DatePicker::classname(), [
                    'language' => 'ru',
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'todayHighlight' => true
                    ],
                ]);
            ?>
            
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <?php  echo $form->field($model, 'doc_seria') ?>
        </div>
        <div class="col-md-6 col-sm-6">
            <?php  echo $form->field($model, 'doc_number') ?>
        </div>
    </div>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'sex_id') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'marital_status_id') ?>

    <?php // echo $form->field($model, 'birth_country_id') ?>

    <?php // echo $form->field($model, 'birth_region_id') ?>

    <?php // echo $form->field($model, 'birth_district_id') ?>

    <?php // echo $form->field($model, 'birth_place_id') ?>

    <?php // echo $form->field($model, 'birth_place_latin') ?>


    <?php // echo $form->field($model, 'document_type_id') ?>


    <?php // echo $form->field($model, 'date_begin_document') ?>

    <?php // echo $form->field($model, 'date_endocument') ?>

    <?php // echo $form->field($model, 'document_div_id') ?>

    <?php // echo $form->field($model, 'document_div_place') ?>

    <?php // echo $form->field($model, 'living_country_id') ?>

    <?php // echo $form->field($model, 'living_region_id') ?>

    <?php // echo $form->field($model, 'living_district_id') ?>

    <?php // echo $form->field($model, 'living_place_id') ?>

    <?php // echo $form->field($model, 'living_street_id') ?>

    <?php // echo $form->field($model, 'living_block') ?>

    <?php // echo $form->field($model, 'living_house') ?>

    <?php // echo $form->field($model, 'living_flat') ?>

    <?php // echo $form->field($model, 'living_place_latin') ?>

    <?php // echo $form->field($model, 'living_foreign_country_id') ?>

    <?php // echo $form->field($model, 'living_foreign_place') ?>

    <?php // echo $form->field($model, 'begin_date') ?>

    <?php // echo $form->field($model, 'arrival_date') ?>

    <?php // echo $form->field($model, 'work_place') ?>

    <?php // echo $form->field($model, 'other_citizenship_id') ?>

    <?php // echo $form->field($model, 'doc_adinfo') ?>

    <?php // echo $form->field($model, 'creation_date') ?>

    <?php // echo $form->field($model, 'foundation_cons_acc') ?>

    <?php // echo $form->field($model, 'living_uzb_place') ?>

    <?php // echo $form->field($model, 'senstatus') ?>

    <?php // echo $form->field($model, 'endate') ?>

    <?php // echo $form->field($model, 'reason_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'adinfo') ?>

    <?php // echo $form->field($model, 'consular_account_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
