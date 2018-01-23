<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use backend\models\SpCountry;
use kartik\select2\Select2;
use backend\models\SpRegion;
use backend\models\SpDistrict;
use backend\models\SpPlace;
use yii\captcha\Captcha;


/* @var $this yii\web\View */
/* @var $model backend\models\Kus */
/* @var $form yii\widgets\ActiveForm */
$lang = Yii::$app->language;

$country = [];

  $country = SpCountry::find()->all();
  $country = ArrayHelper::map($country, 'sp_id','sp_name_'.Yii::$app->language);
// vd($country);

$spregion = [];
if ($model->birth_country_id) {
  $spregion = SpRegion::find()->where(['sp_country_id' => $model->birth_country_id])->asArray()->all();
}

$spdistrict = [];
if ($model->birth_region_id) {
  $spdistrict = SpDistrict::find()->where(['sp_region' => $model->birth_region_id])->asArray()->all();
}

$spplace = [];
if ($model->birth_place_id) {
  $spplace = SpPlace::find()->where(['sp_district' => $model->birth_place_id])->asArray()->all();
}



?>

<div class="kus-form">

  <?php $form = ActiveForm::begin(); ?>
 
   <?= $form->field($model, 'reg_num')->textInput() ?>
  <?= $form->field($model, 'division_id')->textInput() ?>

  <?= $form->field($model, 'pinpp')->textInput(['maxlength' => true]) ?> 

   <?= $form->field($model, 'surname_cyrillic')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'name_cyrillic')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'patronym_cyrillic')->textInput(['maxlength' => true]) ?> 

  <!--2-step-->

  <?= $form->field($model, 'surname_latin')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'name_latin')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'patronym_latin')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'birth_date')->textInput()
  // ->widget(DatePicker::classname(), [
  //     'language' => 'ru',
  //     'pluginOptions' => [
  //         'format' => 'yyyy-mm-dd',
  //         'todayHighlight' => true
  //     ],
  // ]);
  ?>


  <?= $form->field($model, 'photo')->textInput() ?>

  <?= $form->field($model, 'sex_id')->textInput() ?>

  <?= $form->field($model, 'nationality_id')->textInput() ?>

  <?= $form->field($model, 'marital_status_id')->textInput() ?>

   
  
  <?= $form->field($model, 'birth_country_id')->dropDownList($country, ['prompt' => '---']) ?>

  <?= $form->field($model, 'birth_region_id')->dropDownList(ArrayHelper::map($spregion, 'sp_id','sp_name_'.Yii::$app->language)) ?>

  <?= $form->field($model, 'birth_district_id')->dropDownList(ArrayHelper::map($spdistrict, 'sp_id','sp_name_'.Yii::$app->language)) ?>

  <?= $form->field($model, 'birth_place_id')->dropDownList(ArrayHelper::map($spplace, 'sp_id','sp_name_'.Yii::$app->language)) ?>
  

  <?= $form->field($model, 'birth_place_latin')->textInput(['maxlength' => true]) ?>

  <!--2-step-->

  <?= $form->field($model, 'doc_seria')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'document_type_id')->textInput() ?>

  <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'date_begin_document')->textInput()
  // ->widget(DatePicker::classname(), [
  //   'language' => 'ru',
  //   'pluginOptions' => [
  //       'format' => 'yyyy-mm-dd',
  //       'todayHighlight' => true
  //   ],
  // ]);
  ?>

  <?= $form->field($model, 'date_endocument')->textInput()
  // ->widget(DatePicker::classname(), [
  //   'language' => 'ru',
  //   'pluginOptions' => [
  //       'format' => 'yyyy-mm-dd',
  //       'todayHighlight' => true
  //   ],
  // ]);
  ?>

  <?= $form->field($model, 'document_div_id')->textInput() ?>

  <?= $form->field($model, 'document_div_place')->textInput(['maxlength' => true]) ?>

  <!--3-step-->

  <?= $form->field($model, 'living_country_id')->textInput() ?> 

  <?= $form->field($model, 'living_region_id')->textInput() ?>

  <?= $form->field($model, 'living_district_id')->textInput() ?>

  <?= $form->field($model, 'living_place_id')->textInput() ?>

  <?= $form->field($model, 'living_street_id')->textInput() ?>

  <?= $form->field($model, 'living_block')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'living_house')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'living_flat')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'living_place_latin')->textInput(['maxlength' => true]) ?>

  <!--4-step-->

  <?= $form->field($model, 'living_foreign_country_id')->textInput() ?>

  <?= $form->field($model, 'living_foreign_place')->textInput(['maxlength' => true]) ?>
 
  <?= $form->field($model, 'begin_date')
  // ->widget(DatePicker::classname(), [
  //   'language' => 'ru',
  //   'pluginOptions' => [
  //       'format' => 'yyyy-mm-dd',
  //       'todayHighlight' => true
  //   ],
  // ]);
  ?>

   <!-- <?= $form->field($model, 'arrival_date')
   // ->widget(DatePicker::classname(), [
   //    'language' => 'ru',
   //    'pluginOptions' => [
   //        'format' => 'yyyy-mm-dd',
   //        'todayHighlight' => true
   //    ],
   //  ]);
   ?> -->

  <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'other_citizenship_id')->textInput() ?>

  <?= $form->field($model, 'doc_adinfo')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'creation_date')->textInput()
   // ->widget(DatePicker::classname(), [
   //   'language' => 'ru',
   //   'pluginOptions' => [
   //       'format' => 'yyyy-mm-dd',
   //       'todayHighlight' => true
   //   ],
   // ]);
  ?>

  <?= $form->field($model, 'foundation_cons_acc')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'living_uzb_place')->textInput(['maxlength' => true]) ?>

   <?=  $form->field($model, 'senstatus')->textInput() ?>

  <?= $form->field($model, 'endate')->textInput()
  // ->widget(DatePicker::classname(), [
  //   'language' => 'ru',
  //   'pluginOptions' => [
  //       'format' => 'yyyy-mm-dd',
  //       'todayHighlight' => true
  //   ],
  // ]);
  ?>

  <?= $form->field($model, 'reason_id')->textInput() ?>

  <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'adinfo')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'consular_account_type')->textInput() ?>

   <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
          'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
        ]) ?>

  <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
  $('#kus-birth_country_id').change(function(){
    var thisid = $(this).val();
    if (thisid != 182) {
      $('#kus-birth_region_id').attr('disabled', 'disabled');
    }
    else {
      $('#kus-birth_region_id').removeAttr('disabled');
      $.ajax({
      type: 'GET',
      url: '/kus/regions',
      data: {
        id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#kus-birth_region_id').html(data);
      }
      });
    }
  });
  $('#kus-birth_region_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/kus/districts',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#kus-birth_district_id').html(data);
      }
    });
  });
  $('#kus-birth_district_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/kus/sp-places',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#kus-birth_place_id').html(data);
      }
    });
  });
");
?>