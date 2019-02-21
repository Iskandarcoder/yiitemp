<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use backend\models\SpDivision;
use backend\models\SpCountry;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use wbraganca\dynamicform\DynamicFormWidget;
use backend\models\SpRegion;
use backend\models\SpDistrict;
use backend\models\SpPlace;
use backend\models\SpNation;
use backend\models\SpDoctype;
use backend\models\SpStreet;
use backend\models\TypeRelative;
use backend\models\SpReasonb;
use backend\models\SpSertcause;

/* @var $this yii\web\View */
/* @var $model backend\models\AnketaNew */
/* @var $form yii\widgets\ActiveForm */
$lang = Yii::$app->language;

$country = [];
$country = SpCountry::find()->orderBy(new \yii\db\Expression('if(id=182, 0, 1)'))->all();
$country = ArrayHelper::map($country, 'sp_id','sp_name_'.Yii::$app->language);

  $pregion = [];
  $pregion = SpRegion::find()->all();
  $pregion = ArrayHelper::map($pregion, 'sp_id','sp_name_'.Yii::$app->language);



$spregion = [];
if ($model->p_countryb) {
  $spregion = SpRegion::find()->where(['sp_country_id' => $model->p_countryb])->asArray()->all();
}

$spdistrict = [];
if ($model->p_regionb) {
  $spdistrict = SpDistrict::find()->where(['sp_region' => $model->p_regionb])->asArray()->all();
}

$spplace = [];
if ($model->p_place) {
  $spplace = SpPlace::find()->where(['sp_district' => $model->p_place])->asArray()->all();
}

$street = [];
if ($model->p_street) {
  $street = SpStreet::find()->where(['sp_district' => $model->p_street])->asArray()->all();
}


$nation =  SpNation::find()->orderBy(new \yii\db\Expression('if(sp_id=44, 0, 1)'))->all();
$nation =  ArrayHelper::map($nation, 'sp_id','sp_name_'.Yii::$app->language);

$p_doctypeb =  SpDoctype::find()->andWhere(['sp_active'=>'1'])->orderBy(new \yii\db\Expression('if(sp_id=46, 0, 1)'))->all();
$p_doctypeb =  ArrayHelper::map($p_doctypeb, 'sp_id','sp_name_'.Yii::$app->language);

if(Yii::$app->language =='ru'){
$sex_id = [

  '1' => 'МУЖ',

  '2' => 'ЖЕН',

  '3' => 'НЕОПРЕДЕЛЕН',

];
  
}else{
  $sex_id = [

  '1' => 'Erkak',

  '2' => 'Ayol',

  '3' => 'Aniqmas',

];
}

if(Yii::$app->language =='ru'){
$p_birthcomp = [

  '0' => 'День рождения ясен и полон',

  '1' => 'Дата рождения не определена',

];
  
}else{
  $p_birthcomp = [

  '0' => 'Tug\'ilgan kuni aniq va to\'liq',

  '1' => 'Tug\'ilgan kuni aniqlanmagan',

];
}

if(Yii::$app->language =='ru'){
$p_certiftype = [

  '1' => 'Для обмена паспорта',

  '2' => 'Для получения сертификата',

  '3' => 'Другая',

];
  
}else{
  $p_certiftype = [

  '1' => 'Pasportni almashtirish',

  '2' => 'Sertifikat olish uchun',

  '3' => 'Boshqa',

];
}


if(Yii::$app->language =='ru'){
  $p_marital = [
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
  $p_marital = [
  '1' => 'BO\'YDOQ',
  '2' => 'OILALI',
  '3' => 'AJRASHGAN',
  '4' => 'BEVA',
  '5' => 'ERGA TEGMAGAN',
]; 
}

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
  .file-drop-zone-title{
    display: none;
  }
  .file-drop-zone{
    padding: 0px;
  }

</style>
 <div class="row">
      <div class="col-md-10 col-md-offset-1">
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title" style="text-align: center;font-weight: bold;">
            Sertifikat olish uchun hujjatlarni tayyorlashda shaxsiy ma'lumotlarni kiritish
            </h3>
            <hr>

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <div class="row">
        <div class="col-md-8">
            <?=$form->field($model, 'p_division')->widget(Select2::classname(), [
                          'data' => ArrayHelper::map(SpDivision::find()->where(['sp_idfirst' => 1])->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                          'language' => 'ru',
                          'options' => ['placeholder' => 'Выберите Вид ...'],
                          'pluginOptions' => [
                              'allowClear' => true,
                              'multiple' => false,
                          ],
                      ]);
                      
            ?>        
        </div>
        <div class="col-md-4">
            <?php // echo $form->field($model, 'p_photo')->widget(FileInput::classname(), [
                  //            'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                  //        ]);
            ?>
            <?= $form->field($model, 'p_photo')->widget(FileInput::classname(), [
                'options' => ['accept'=>'image/*', 'maxSize'=>'500000'],
                'pluginOptions'=>[
                    'allowedFileExtensions'=>['jpg', 'gif', 'png', 'bmp'],
                    'showUpload' => true,
                    'initialPreview' => [
                         '<img style="width:180px" src="data:image/png;base64,'.base64_encode($model->p_photo).'" />',
                    ],
                    'overwriteInitial' => false,
                ],
            ]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_surnamel')->textInput(['maxlength' => true]) ?>          
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_namel')->textInput(['maxlength' => true]) ?>    
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_patronyml')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_birth')
                    ->widget(DatePicker::classname(), [
                        'language' => 'ru',
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'yyyy-mm-dd',
                            'todayHighlight' => true
                        ],
                    ]);
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_sex')->dropDownlist($sex_id, ['prompt' => '---']); ?>
        </div>
        <div class="col-md-6">
          <?=$form->field($model, 'p_nation')->widget(Select2::classname(), [
                  'data' => $nation,
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

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_countryb')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_regionb')->dropDownList($spregion, ['prompt' => '---']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_districtb')->dropDownList($spdistrict, ['prompt' => '---']) ?>
        </div>
        <div class="col-md-6">
              <?= $form->field($model, 'p_birthe')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_marital')->dropDownlist($p_marital, ['prompt' => '---']); ?>
        </div>
        <div class="col-md-6">
          <?=$form->field($model, 'p_doctypeb')->widget(Select2::classname(), [
                              'data' => $p_doctypeb,
                              'language' => 'ru',
                              'options' => ['placeholder' => 'Выберите Вид ...'],
                              'pluginOptions' => [
                                  'allowClear' => true,
                              ],
                          ]);
                          
           ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_seryb')->textInput(['maxlength' => true]) ?>   
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_numberb')->textInput(['maxlength' => true]) ?>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_datebegb')
                        ->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ],
                        ]);
          ?>  
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'p_dateendb')
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
        <div class="col-md-6">
          <?=$form->field($model, 'p_issuedbyb')->widget(Select2::classname(), [
                          'data' => ArrayHelper::map(SpDivision::find()->all(), 'sp_name_'.Yii::$app->language, 'sp_name_'.Yii::$app->language),
                          'language' => 'ru',
                          'options' => ['placeholder' => 'Выберите Вид ...'],
                          'pluginOptions' => [
                              'allowClear' => true,
                              'multiple' => false,
                          ],
                      ]);
                      
            ?> 
        </div>
        <div class="col-md-6">
          <?=$form->field($model, 'p_cause')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(SpSertcause::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
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

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_region')->dropDownList($pregion, ['prompt' => '---']) ?>
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_district')->dropDownList(ArrayHelper::map($spdistrict, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_street')->dropDownList(ArrayHelper::map($street, 'sp_id','sp_name_'.Yii::$app->language)) ?>  
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_korpus')->textInput(['maxlength' => true]) ?>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_house')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_flat')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <?= $form->field($model, 'p_address')->textInput(['maxlength' => true]) ?>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_countryout')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_dateout')
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
        <div class="col-md-6">
          <?=$form->field($model, 'p_reasonb')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(SpReasonb::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                    'language' => 'ru',
                    'options' => ['placeholder' => 'Выберите Вид ...'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'multiple' => false,
                    ],
                ]);
                
            ?>  
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_reasonfull')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <?= $form->field($model, 'p_work')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'p_addressout')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
          <?= $form->field($model, 'p_dateenter')
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
        <div class="col-md-8 col-md-offset-2">
          <div class="panel-body" id="inrelative">
                         <?php DynamicFormWidget::begin([
                            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                            'widgetBody' => '.container-items', // required: css class selector
                            'widgetItem' => '.item', // required: css class
                            'limit' => 4, // the maximum times, an element can be cloned (default 999)
                            'min' => 1, // 0 or 1 (default 1)
                            'insertButton' => '.add-item', // css class
                            'deleteButton' => '.remove-item', // css class
                            'model' => $modelInrelative[0],
                            'formId' => 'dynamic-form',
                            'formFields' => [
                                'type_relative',
                                'fio',
                                'address',
                            ],
                        ]); ?>

                        <div class="container-items"><!-- widgetContainer -->
                        <?php foreach ($modelInrelative as $i => $modelin): ?>
                            <div class="item panel panel-default"><!-- widgetBody -->
                                <div class="panel-heading">
                                    <h3 class="panel-title pull-left"><i class="fa fa-user"></i></h3>
                                    <div class="pull-right">
                                        <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                        <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <?php
                                        // necessary for update action.
                                        if (!$modelin->isNewRecord) {
                                            echo Html::activeHiddenInput($modelin, "[{$i}]id");
                                        }
                                    ?>
                                    
                                    <?= $form->field($modelin, "[{$i}]type_relative")->dropDownlist(ArrayHelper::map(TypeRelative::find()->all(), 'id',$lang.'_type_relative'),['prompt' => 'Select....']) ?>
                                    <?= $form->field($modelin, "[{$i}]fio")->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($modelin, "[{$i}]address")->textArea(['maxlength' => true]) ?>
                                    
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                      <?php DynamicFormWidget::end(); ?>
                    </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <?= $form->field($model, 'p_birthcomp')->dropDownlist($p_birthcomp, ['prompt' => '---']); ?>    
      </div>
      <div class="col-md-6">
        <?= $form->field($model, 'p_certiftype')->dropDownlist($p_certiftype, ['prompt' => '---']); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <?= $form->field($model, 'p_status')->textInput() ?>
      </div>
    </div>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
<?php
$this->registerJs("  
  
  $('#anketanew-p_countryb').change(function(){
    var thisid = $(this).val();
    if (thisid != 182) {
      $('#anketanew-p_regionb').attr('disabled', 'disabled');
      $('#anketanew-p_regionb').html('');
      $('#anketanew-p_districtb').attr('disabled', 'disabled');
      $('#anketanew-p_districtb').html('');
      // $('#vkus-birth_place_id').attr('disabled', 'disabled');
      // $('#vkus-birth_place_id').html('');
    }
    else {
      $('#anketanew-p_regionb').removeAttr('disabled');
      $('#anketanew-p_districtb').removeAttr('disabled');
      //$('#vkus-birth_place_id').removeAttr('disabled');
      $.ajax({
      type: 'GET',
      url: '/anketa-new/regions',
      data: {
        id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#anketanew-p_regionb').html(data);
      }
      });
    }
  });

  $('#anketanew-p_regionb').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/anketa-new/districts',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#anketanew-p_districtb').html(data);
      }
    });
  });

  $('#anketa-new-birth_district_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/anketa-new/sp-places',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#anketa-new-birth_place_id').html(data);
      }
    });
  });


  // yashash joyi uchun js----------------------------------------

  $('#anketanew-p_country').change(function(){
    var thisid = $(this).val();
    if (thisid != 182) {
      $('#anketanew-p_region').attr('disabled', 'disabled');
      $('#anketanew-p_region').html('');
      $('#anketanew-p_district').attr('disabled', 'disabled');
      $('#anketanew-p_district').html('');
      $('#anketanew-p_place').attr('disabled', 'disabled');
      $('#anketanew-p_place').html('');
      $('#anketanew-p_street').attr('disabled', 'disabled');
      $('#anketanew-p_street').html('');
    }
    else {
      $('#anketanew-p_region').removeAttr('disabled');
      $('#anketanew-p_district').removeAttr('disabled');
      $('#anketanew-p_place').removeAttr('disabled');
      $.ajax({
      type: 'GET',
      url: '/anketa-new/regions',
      data: {
        id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#anketanew-p_region').html(data);
      }
      });
    }
  });

  $('#anketanew-p_region').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/anketa-new/districts',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#anketanew-p_district').html(data);
        $('#anketanew-p_place').html(data);
        $('#anketanew-p_street').html(data);
      }
    });
  });

  $('#anketanew-p_district').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/anketa-new/sp-places',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#anketanew-p_place').html(data);
        $('#anketanew-p_street').html(data);
      }
    });
  });
  $('#anketanew-p_district').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/anketa-new/street',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#anketanew-p_street').html(data);
      }
    });
  });

  ////////////////////////////////////////////////////////////////////////////////
    $('._inrelativeshow').on('click', function(event){
      
       $('#inrelative').show();
    });

    $('._inrelativehide').on('click', function(event){
      
       $('#inrelative').hide();
    });

    ////////////////////////////////////////////////////////////////////////////////
    $('._inrelativeshow1').on('click', function(event){
      
       $('#inrelative1').show();
    });

    $('._inrelativehide1').on('click', function(event){
      
       $('#inrelative1').hide();
    });



   
    
");
$this->registerJs("$(document).ready(function($){
    
    $('#kus-wed_name').parents('.form-group').hide();
    $('#kus-which_school').parents('.form-group').hide();
    
//////////////////////////////////////////////////////////////////////////////////
      
//////////////////////////////////////////////////////////////////////////////////
$('#kus-marital_status_id').change(function()
  {
    if(($(this).val()== 2)||($(this).val()== 6))
      $('#kus-wed_name').parents('.form-group').show();
    else
      $('#kus-wed_name').parents('.form-group').hide();
    });


//////////////////////////////////////////////////////////////////////////////////   

//////////////////////////////////////////////////////////////////////////////////
$('#kus-education').change(function()
  {
    if(($(this).val()== 1)||($(this).val()== 6))
      $('#kus-which_school').parents('.form-group').show();
    else
      $('#kus-which_school').parents('.form-group').hide();
    });


//////////////////////////////////////////////////////////////////////////////////    
 
 


})");

?> 