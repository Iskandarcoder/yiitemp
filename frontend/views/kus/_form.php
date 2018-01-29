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
use backend\models\SpNation;
use backend\models\SpDoctype;
use backend\models\SpDivision;
use backend\models\VkuKart;
use backend\models\SpStreet;
use yii\captcha\Captcha;
use kartik\file\FileInput;


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

$street = [];
if ($model->living_street_id) {
  $street = SpStreet::find()->where(['sp_place' => $model->living_street_id])->asArray()->all();
}

$sex_id = [

  '1' => 'Erkak',

  '2' => 'Ayol',

  '3' => 'Aniqmas',

];
if(Yii::$app->language =='ru'){
  $marital_status_id = [
  '1' => 'ХОЛОСТ',
  '2' => 'ЖЕНАТ',
  '3' => 'РАЗВЕДЕН',
  '4' => 'ВДОВЕЦ',
  '5' => 'НЕ ЗАМУЖЕМ',
  '6' => 'ЗАМУЖЕМ',
  '7' => 'РАЗВЕДЕНА',
  '8' => 'ВДОВА',

];  
}else{
  $marital_status_id = [
  '1' => 'BO\'YDOQ',
  '2' => 'OILALI',
  '3' => 'AJRASHGAN',
  '4' => 'BEVA',
  '5' => 'ERGA TEGMAGAN',
]; 
}


?>

<div class="container well well-lg">
 <h3>O`zbekiston Respublikasining horijda vaqtincha yashovchi fuqarolarini ro`yxatga olish uchun shaxsiy ma'lumotlarni kiritish</h3>
            <br/>
            <br/>
    

   <div class="board">
          <ul class="nav nav-tabs">
                <div class="liner"></div>
                <li rel-index="0"  class="active">
                    <a  id="s1" href="#step-1" class="btn media-links" aria-controls="step-1" role="tab" data-toggle="tab">
                      <h4 class="step-txt1">Asosiy malumotlar</h4>
                      <span><i class="fa fa-user media-imgs"></i></span>
                    </a>
                </li>
                <li rel-index="1">
                    <a  id="s2" href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                      <h4 class="step-txt2">Pasport</h4>
                      <span><i class="fa fa-vcard-o"></i></span>
                    </a>
                </li>
                <li  rel-index="2">
                    <a  id="s3" href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                      <h4 class="step-txt3">Yashash joyi</h4>
                      <span><i class="fa fa-home"></i></span>
                    </a>
                </li>
                <li rel-index="3">
                    <a  id="s4" href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                      <h4 class="step-txt4">Qo'shimcha ma'lumotlar</h4>
                      <span><i class="fa fa-file-text-o"></i></span>
                    </a>
                </li>
            </ul>
        </div>

  <?php $form = ActiveForm::begin(); ?>
<div class="tab-content">
  <div class="1form-group" id="photo">
        <div class="col-sm-offset-9 col-sm-3">
          <?php echo FileInput::widget([
              'name' => 'photo',
              'pluginOptions' => [
                  'showCaption' => false,
                  'showRemove' => false,
                  'showUpload' => false,
                  'showCancel' => false,
                  'browseClass' => 'btn btn-primary btn-block',
                  //'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                  'browseLabel' =>  'Select Photo'
              ],
              'options' => ['accept' => 'image/*']
          ]);
          ?>
        </div>
  </div>

  
  <!--2-step-->

  <div class="form-group">
        <div class="col-sm-6">
          <?= $form->field($model, 'surname_latin')->textInput(['maxlength' => true]) ?>

        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
          <?= $form->field($model, 'name_latin')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
          <?= $form->field($model, 'patronym_latin')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
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

  

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'sex_id')->dropDownlist($sex_id, ['prompt' => '---']); ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?=$form->field($model, 'nationality_id')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(SpNation::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                  'language' => 'ru',
                  'options' => ['placeholder' => 'Выберите Вид ...'],
                  'pluginOptions' => [
                      'allowClear' => true,
                      'multiple' => false,
                  ],
              ]);
              
            ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'marital_status_id')->dropDownlist($marital_status_id, ['prompt' => '---']); ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'birth_country_id')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'birth_region_id')->dropDownList(ArrayHelper::map($spregion, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'birth_district_id')->dropDownList(ArrayHelper::map($spdistrict, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'birth_place_id')->dropDownList(ArrayHelper::map($spplace, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
  </div>  
 

  <!--2-step-->
  

  <div class="form-group">
        <div class="col-sm-6">
            <?=$form->field($model, 'document_type_id')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(SpDoctype::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                  'language' => 'ru',
                  'options' => ['placeholder' => 'Выберите Вид ...'],
                  'pluginOptions' => [
                      'allowClear' => true,
                  ],
              ]);
              
            ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'doc_seria')->textInput(['maxlength' => true]) ?>
        </div>
  </div>
  
  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'date_begin_document')
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

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'date_endocument')
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

  <div class="form-group">
        <div class="col-sm-6">
            <?=$form->field($model, 'document_div_id')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(SpDivision::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                  'language' => 'ru',
                  'options' => ['placeholder' => 'Выберите Вид ...'],
                  'pluginOptions' => [
                      'allowClear' => true,
                      'multiple' => false,
                  ],
              ]);
              
            ?>
        </div>
  </div>
  
  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'document_div_place')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'living_country_id')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'living_region_id')->dropDownList(ArrayHelper::map($spregion, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
  </div>
  
  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'living_district_id')->dropDownList(ArrayHelper::map($spdistrict, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'living_place_id')->dropDownList(ArrayHelper::map($spplace, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'living_street_id')->dropDownList(ArrayHelper::map($street, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'living_block')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'living_house')->textInput(['maxlength' => true]) ?>
        </div>
  </div>
  
  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'living_flat')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'living_place_latin')->textInput(['maxlength' => true]) ?>
        </div>
  </div>  

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'living_foreign_country_id')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'living_foreign_place')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'begin_date')
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

 
  

   <!-- <?= $form->field($model, 'arrival_date')
   // ->widget(DatePicker::classname(), [
   //    'language' => 'ru',
   //    'pluginOptions' => [
   //        'format' => 'yyyy-mm-dd',
   //        'todayHighlight' => true
   //    ],
   //  ]);
   ?> -->
   <div class="form-group">
        <div class="col-sm-12">
           <?= $form->field($model, 'division_id')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(VkuKart::find()->all(), 'id', 'elchihona_qn_'.Yii::$app->language),
                  'language' => 'ru',
                  'options' => ['placeholder' => 'Выберите Вид ...'],
                  'pluginOptions' => [
                      'allowClear' => true,
                      'multiple' => false,
                  ],
              ]);
              
            ?>
        </div>
    </div>

   <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'other_citizenship_id')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'creation_date')
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

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'foundation_cons_acc')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'living_uzb_place')->textInput(['maxlength' => true]) ?>
        </div>
  </div>

  <div class="form-group">
        <div class="col-sm-6">
            <?= $form->field($model, 'endate')
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

  <div class="form-group">
        <div class="col-sm-6">
             <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
          'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
        ]) ?>
        </div>
  </div>
  
  <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  </div>
</div>
  <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
  
  $('#kus-birth_country_id').change(function(){
    var thisid = $(this).val();
    if (thisid != 182) {
      $('#kus-birth_region_id').attr('disabled', 'disabled');
      $('#kus-birth_region_id').html('');
      $('#kus-birth_district_id').attr('disabled', 'disabled');
      $('#kus-birth_district_id').html('');
      $('#kus-birth_place_id').attr('disabled', 'disabled');
      $('#kus-birth_place_id').html('');
    }
    else {
      $('#kus-birth_region_id').removeAttr('disabled');
      $('#kus-birth_district_id').removeAttr('disabled');
      $('#kus-birth_place_id').removeAttr('disabled');
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


  // yashash joyi uchun js----------------------------------------

  $('#kus-living_country_id').change(function(){
    var thisid = $(this).val();
    if (thisid != 182) {
      $('#kus-living_region_id').attr('disabled', 'disabled');
      $('#kus-living_region_id').html('');
      $('#kus-living_district_id').attr('disabled', 'disabled');
      $('#kus-living_district_id').html('');
      $('#kus-living_place_id').attr('disabled', 'disabled');
      $('#kus-living_place_id').html('');
      $('#kus-living_street_id').attr('disabled', 'disabled');
      $('#kus-living_street_id').html('');
    }
    else {
      $('#kus-living_region_id').removeAttr('disabled');
      $('#kus-living_district_id').removeAttr('disabled');
      $('#kus-living_place_id').removeAttr('disabled');
      $.ajax({
      type: 'GET',
      url: '/kus/regions',
      data: {
        id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#kus-living_region_id').html(data);
      }
      });
    }
  });

  $('#kus-living_region_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/kus/districts',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#kus-living_district_id').html(data);
      }
    });
  });

  $('#kus-living_district_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/kus/sp-places',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#kus-living_place_id').html(data);
      }
    });
  });

  $('#kus-living_place_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/kus/street',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#kus-living_street_id').html(data);
      }
    });
  });

");
?>