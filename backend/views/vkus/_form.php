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
use backend\models\Education;
use backend\models\TypeRelative;
use yii\captcha\Captcha;
use kartik\file\FileInput;
use wbraganca\dynamicform\DynamicFormWidget;


$lang = Yii::$app->language;
/* @var $this yii\web\View */
/* @var $model backend\models\Vkus */
/* @var $form yii\widgets\ActiveForm */
$country = [];
$country = SpCountry::find()->orderBy(new \yii\db\Expression('if(id=182, 0, 1)'))->all();
$country = ArrayHelper::map($country, 'sp_id','sp_name_'.Yii::$app->language);
$nation =  SpNation::find()->orderBy(new \yii\db\Expression('if(sp_id=44, 0, 1)'))->all();
$nation =  ArrayHelper::map($nation, 'sp_id','sp_name_'.Yii::$app->language);

$living_regions = [];

  $living_regions = SpRegion::find()->all();
  $living_regions = ArrayHelper::map($living_regions, 'sp_id','sp_name_'.Yii::$app->language);

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
  $street = SpStreet::find()->where(['sp_district' => $model->living_street_id])->asArray()->all();
}

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
  $marital_status_id = [
  '1' => 'ХОЛОСТ',
  '2' => 'ЖЕНАТ',
  '3' => 'РАЗВЕДЕН',
  '4' => 'ВДОВЕЦ',
  '5' => 'НЕ ЗАМУЖЕМ',
  '6' => 'ЗАМУЖЕМ',
  '3' => 'РАЗВЕДЕНА',
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
if(Yii::$app->language =='ru'){
$status = [
  '0' => 'Форма заявки не была принята',
  '1' => 'Подписался',
];}else{
  $status = [
  '0' => 'Yangi talabnoma',
  '1' => 'Ro\'yhatga olindi',
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

    <!-- BEGIN SIDEBAR -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title" style="text-align: center;font-weight: bold;">
            Vaqtinchalik konsullik hisobiga olish
            </h3>
            <hr>

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'division_id')->widget(Select2::classname(), [
                                  'data' => ArrayHelper::map(SpDivision::find()->where(['sp_idfirst' => 1])->all(), 'sp_id', 'sp_name_uz'),
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
            <?php echo $form->field($model, 'photo')->widget(FileInput::classname(), [
                                'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                            ]);
                      ?>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'surname_latin')->textInput(['maxlength' => true]) ?>        
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'name_latin')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'patronym_latin')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'birth_date')
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
            <?= $form->field($model, 'sex_id')->dropDownlist($sex_id, ['prompt' => '---']); ?>
        </div>
        <div class="col-md-6">
            <?=$form->field($model, 'nationality_id')->widget(Select2::classname(), [
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
            <?= $form->field($model, 'marital_status_id')->dropDownlist($marital_status_id, ['prompt' => '---']); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'wed_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'birth_country_id')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'birth_region_id')->dropDownList(ArrayHelper::map($spregion, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'birth_district_id')->dropDownList(ArrayHelper::map($spdistrict, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'education')->dropDownList(
                        ArrayHelper::map(Education::find()->all(), 'id',$lang.'_type_edu'),
                        ['prompt'=>'------']
                      ) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'which_school')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'education_date')
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
        <div class="col-md-12">
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
    
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'doc_seria')->textInput(['maxlength' => true]) ?> 
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'date_begin_document')
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
        <div class="col-md-6">
            <?= $form->field($model, 'date_endocument')
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
        <div class="col-md-6">
            <?= $form->field($model, 'document_div_place')->textInput(['maxlength' => true]) ?>    
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'living_region_id')->dropDownList($living_regions, ['prompt' => '---']) ?>         
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'living_district_id')->dropDownList(ArrayHelper::map($spdistrict, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'living_street_id')->dropDownList(ArrayHelper::map($street, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'living_block')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'living_house')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'living_flat')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'living_place_latin')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'living_foreign_country_id')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'begin_date')
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
        <div class="col-md-6">
            <?= $form->field($model, 'living_foreign_place')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'foundation_cons_acc')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'status')->dropDownList($status, ['prompt' => '---']) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Qo\'shish') : Yii::t('app', 'Tahrirlash'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
<?php
$this->registerJs("  
  $('#vkus-birth_country_id').change(function(){
    var thisid = $(this).val();
    if (thisid != 182) {
      $('#vkus-birth_region_id').attr('disabled', 'disabled');
      $('#vkus-birth_region_id').html('');
      $('#vkus-birth_district_id').attr('disabled', 'disabled');
      $('#vkus-birth_district_id').html('');
      $('#vkus-birth_place_id').attr('disabled', 'disabled');
      $('#vkus-birth_place_id').html('');
    }
    else {
      $('#vkus-birth_region_id').removeAttr('disabled');
      $('#vkus-birth_district_id').removeAttr('disabled');
      $('#vkus-birth_place_id').removeAttr('disabled');
      $.ajax({
      type: 'GET',
      url: '/vkus/regions',
      data: {
        id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#vkus-birth_region_id').html(data);
      }
      });
    }
  });

  $('#vkus-birth_region_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/vkus/districts',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#vkus-birth_district_id').html(data);
      }
    });
  });

  $('#vkus-birth_district_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/vkus/sp-places',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#vkus-birth_place_id').html(data);
      }
    });
  });


  // yashash joyi uchun js----------------------------------------

  $('#vkus-living_country_id').change(function(){
    var thisid = $(this).val();
    if (thisid != 182) {
      $('#vkus-living_region_id').attr('disabled', 'disabled');
      $('#vkus-living_region_id').html('');
      $('#vkus-living_district_id').attr('disabled', 'disabled');
      $('#vkus-living_district_id').html('');
      $('#vkus-living_place_id').attr('disabled', 'disabled');
      $('#vkus-living_place_id').html('');
      $('#vkus-living_street_id').attr('disabled', 'disabled');
      $('#vkus-living_street_id').html('');
    }
    else {
      $('#vkus-living_region_id').removeAttr('disabled');
      $('#vkus-living_district_id').removeAttr('disabled');
      $('#vkus-living_place_id').removeAttr('disabled');
      $.ajax({
      type: 'GET',
      url: '/vkus/regions',
      data: {
        id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#vkus-living_region_id').html(data);
      }
      });
    }
  });

  $('#vkus-living_region_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/vkus/districts',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#vkus-living_district_id').html(data);
        $('#vkus-living_place_id').html(data);
        $('#vkus-living_street_id').html(data);
      }
    });
  });

  $('#vkus-living_district_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/vkus/sp-places',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#vkus-living_place_id').html(data);
        $('#vkus-living_street_id').html(data);
      }
    });
  });
  $('#vkus-living_district_id').change(function(){
    var thisid = $(this).val();
    $.ajax({
      type: 'GET',
      url: '/vkus/street',
      data: {
      id: thisid,
      },
      success: function(data){
        console.log(data);
        $('#vkus-living_street_id').html(data);
      }
    });
  });


   
    
");


$this->registerJs("$(document).ready(function($){
    
    $('#vkus-wed_name').parents('.form-group').hide();
    $('#vkus-which_school').parents('.form-group').hide();
    
//////////////////////////////////////////////////////////////////////////////////
    
$('#vkus-marital_status_id').change(function()
  {
    if(($(this).val()== 2)||($(this).val()== 6))
      $('#vkus-wed_name').parents('.form-group').show();
    else
      $('#vkus-wed_name').parents('.form-group').hide();
    });

//////////////////////////////////////////////////////////////////////////////////
$('#vkus-education').change(function()
  {
    if(($(this).val()== 1)||($(this).val()== 6))
      $('#vkus-which_school').parents('.form-group').show();
    else
      $('#vkus-which_school').parents('.form-group').hide();
    });


//////////////////////////////////////////////////////////////////////////////////    


//////////////////////////////////////////////////////////////////////////////////      
 $('.nav-tabs > li > a').click(function() { 
            if($(this).hasClass('disabled')) {
            return false;
        } else {
            var linkIndex = $(this).parent().index();
            $('.nav-tabs > li').each(function(index, item) {  
                $(item).attr('rel-index', index - linkIndex+1);
                                });
       if(linkIndex==4)
     {
     $('#next').hide();
     $('#send').show();
     $('.btn-success').show();
   }
   else
     {
     $('#next').show(); 
     $('#send').hide();
     $('.btn-success').hide();
     }  

      if(linkIndex>1)
     {
     $('#back').show();
     }
   else
     {
     $('#back').hide();
     }  
                 
     step= linkIndex; 
            }
});

 


})");

?> 