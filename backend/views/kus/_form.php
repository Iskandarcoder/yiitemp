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


/* @var $this yii\web\View */
/* @var $model backend\models\Kus */
/* @var $form yii\widgets\ActiveForm */
$lang = Yii::$app->language;
$country = [];
$nation =  SpNation::find()->orderBy(new \yii\db\Expression('if(sp_id=44, 0, 1)'))->all();
$nation =  ArrayHelper::map($nation, 'sp_id','sp_name_'.Yii::$app->language);

$living_regions = [];
  $country = [];
  $country = SpCountry::find()->orderBy(new \yii\db\Expression('if(id=182, 0, 1)'))->all();
  $country = ArrayHelper::map($country, 'sp_id','sp_name_'.Yii::$app->language);
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
  $street = SpStreet::find()->where(['sp_place' => $model->living_street_id])->asArray()->all();
}


$spdistrict_living = [];
if ($model->living_region_id) {
  $spdistrict_living = SpDistrict::find()->where(['sp_region' => $model->living_region_id])->asArray()->all();
}

$spplace_living = [];
if ($model->living_place_id) {
  $spplace_living = SpPlace::find()->where(['sp_district' => $model->living_place_id])->asArray()->all();
}

$street_living = [];
if ($model->living_street_id) {
  $street_living = SpStreet::find()->where(['sp_district' => $model->living_street_id])->asArray()->all();
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
            Doimiy konsullik hisobiga olish
            </h3>
            <hr>

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

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
                                'options' => ['accept' => 'image/*',
                                              'overwriteInitial'=>false,
                                              'maxFileSize'=>'18'],
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
        <div class="col-md-4">    
            <?= $form->field($model, 'education')->dropDownList(
                    ArrayHelper::map(Education::find()->all(), 'id',$lang.'_type_edu'),
                    ['prompt'=>'------']
                  ) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'which_school')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
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
            <?= $form->field($model, 'doc_seria')->textInput(['maxlength' => true, 'class' => 'form-control seria', 'style'=>'text-transform: uppercase;']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true, 'class' => 'form-control pasport']) ?>
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
            <?= $form->field($model, 'living_district_id')->dropDownList(ArrayHelper::map($spdistrict_living, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <?= $form->field($model, 'living_street_id')->dropDownList(ArrayHelper::map($street_living, 'sp_id','sp_name_'.Yii::$app->language)) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'living_block')->textInput(['maxlength' => true]) ?>        
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'living_house')->textInput(['maxlength' => true]) ?>        
        </div>
        <div class="col-md-6">
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
            <?= $form->field($model, 'other_citizenship_id')->dropDownList($country, ['prompt' => '---']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'foundation_cons_acc')->textInput(['maxlength' => true]) ?>        
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'living_foreign_place')->textInput(['maxlength' => true]) ?>    
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?= $form->field($model, 'work_place')->textInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
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
                        <?= $form->field($modelin, "[{$i}]address")->textInput(['maxlength' => true]) ?>
                        
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel-body" id="inrelative1">
         
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 2, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelOutrelative[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'type_relative',
                    'fio',
                    'address',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelOutrelative as $i => $modelout): ?>
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
                            if (!$modelout->isNewRecord) {
                                echo Html::activeHiddenInput($modelout, "[{$i}]id");
                            }
                        ?>
                        
                        <?= $form->field($modelout, "[{$i}]type_relative")->dropDownlist(ArrayHelper::map(TypeRelative::find()->all(), 'id',$lang.'_type_relative'),['prompt' => 'Select....']) ?>
                        <?= $form->field($modelout, "[{$i}]fio")->textInput(['maxlength' => true]) ?>
                        <?= $form->field($modelout, "[{$i}]address")->textInput(['maxlength' => true]) ?>
                        
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?= $form->field($model, 'status')->dropDownList($status, ['prompt' => '---']) ?>
      </div>
    </div>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Qo\'shish' : 'Tahrirlash', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
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
        $('#kus-living_place_id').html(data);
        $('#kus-living_street_id').html(data);
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
        $('#kus-living_street_id').html(data);
      }
    });
  });
  $('#kus-living_district_id').change(function(){
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