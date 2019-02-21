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
use backend\models\SpStreet;
use backend\models\TypeRelative;
use yii\captcha\Captcha;
use kartik\file\FileInput;
use backend\models\SpSertcause;
use backend\models\SpReasonb;
use wbraganca\dynamicform\DynamicFormWidget;


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
</style>

<div class="container well well-lg">
 <h4><?= Yii::t('app', 'Sertifikat olish uchun hujjatlarni tayyorlashda shaxsiy ma`lumotlarni kiritish'); ?></h4>
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

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <div class="tab-content">
            <div  class="tab-pane active" id="step-1">

                <h3 class="step-txt1"><?= Yii::t('app', 'Asosiy ma\'lumotlar'); ?></h3> 

                <div class="row">
                    <div class="form-group col-sm-4 data-toggle='tooltip' data-placement='top' title='Faqat lotin harflarida!'">
                        <?= $form->field($model, 'p_surnamel')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_namel')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_patronyml')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_birth')
                            ->widget(DatePicker::classname(), [
                                'language' => 'ru',
                                'pluginOptions' => [
                                    //'format' => 'yyyy-mm-dd',
                                    'format' => 'dd.mm.yyyy',
                                    'todayHighlight' => true
                                ],
                            ]);
                        ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_sex')->dropDownlist($sex_id, ['prompt' => '---']); ?>
                    </div>
                    <div class="form-group col-sm-4">
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
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_countryb')->dropDownList($country, ['prompt' => '---']) ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_regionb')->dropDownList($spregion, ['prompt' => '---']) ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_districtb')->dropDownList($spdistrict, ['prompt' => '---']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-4">
                            <?= $form->field($model, 'p_birthe')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_marital')->dropDownlist($p_marital, ['prompt' => '---']); ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?php echo $form->field($model, 'p_photo')->widget(FileInput::classname(), [
                              'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div>
                </div>

            </div>    <!-- 1-step tugadi shu yerda --> 

            <div  class="tab-pane"  id="step-2"> 
                <h3 class="step-txt2"><?= Yii::t('app', 'Pasport'); ?></h3>
                <div class="row">
                    <div class="form-group col-sm-4">
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
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_seryb')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-4">
                        <?= $form->field($model, 'p_numberb')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
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
                    <div class="form-group col-sm-6">
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
                    <div class="form-group col-sm-6">
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
                    <div class="form-group col-sm-6">
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


            </div> <!-- 2-step tugadi -->

            <div  class="tab-pane"  id="step-3">
                <h3 class="step-txt3"><?= Yii::t('app', 'O`zbekistonda yashagan joyi'); ?></h3>
              <div class="row">
                  <div class="form-group col-sm-4">
                      <?= $form->field($model, 'p_region')->dropDownList($pregion, ['prompt' => '---']) ?>
                  </div>
                  <div class="form-group col-sm-4">    
                      <?= $form->field($model, 'p_district')->dropDownList(ArrayHelper::map($spdistrict, 'sp_id','sp_name_'.Yii::$app->language)) ?>
                  </div>
                  <div class="form-group col-sm-4">    
                      <?= $form->field($model, 'p_street')->dropDownList(ArrayHelper::map($street, 'sp_id','sp_name_'.Yii::$app->language)) ?>
                  </div>    
              </div>
              <div class="row">
                <div class="form-group col-sm-4">    
                      <?= $form->field($model, 'p_korpus')->textInput(['maxlength' => true]) ?>  
                </div>
                <div class="form-group col-sm-4">    
                      <?= $form->field($model, 'p_house')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="form-group col-sm-4">    
                      <?= $form->field($model, 'p_flat')->textInput(['maxlength' => true]) ?>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-12">    
                      <?= $form->field($model, 'p_address')->textInput(['maxlength' => true]) ?>
                </div>
              </div>

            </div> <!-- 3-step tugadi -->

            <div  class="tab-pane"  id="step-4">

                <h3 class="step-txt4"><?= Yii::t('app', 'Qo\'shimcha ma\'lumotlar' ); ?></h3>

                <div class="row">
                  <div class="form-group col-sm-4">    
                      <?= $form->field($model, 'p_countryout')->dropDownList($country, ['prompt' => '---']) ?>
                  </div>
                  <div class="form-group col-sm-4">    
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
                  <div class="form-group col-sm-4">    
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
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <?= $form->field($model, 'p_reasonfull')->textInput(['maxlength' => true]) ?>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-12">
                      <?= $form->field($model, 'p_work')->textInput(['maxlength' => true]) ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-sm-8">
                      <?= $form->field($model, 'p_addressout')->textInput(['maxlength' => true]) ?>
                  </div>
                  <div class="form-group col-sm-4">
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
                  
                  <div class="form-group col-sm-6">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4><i class="fa fa-users"></i> O'zbekiston Respublikasidagi yaqin qarindoshlaringiz </h4>
                        <div style="text-align: right;">
                          <button type="button" style="width: 50px;" title="Qarindoshlarim bor" class="btn btn-primary _inrelativeshow"><i class="glyphicon glyphicon-plus"></i></button>
                          <button type="button" style="width: 50px;" title="Qarindoshlarim yo'q" class="btn btn-danger _inrelativehide"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                      </div>
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
                  <div class="form-group col-sm-6">
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
                </div>
                
                 <div class="row">
                    <div class="form-group col-sm-6">
                             <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                          'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>
                    </div>
                </div>
            </div>



    <div class="row">
      <div class="col-sm-4">
           <button id="back" class="btn btn-primary btn-lg" type="button" ><i class="fa fa-chevron-left"></i> <?= Yii::t('app', 'Orqaga'); ?></button>
      </div>
      <div class="col-sm-offset-4 col-sm-4">
        <button id="next" class="btn btn-primary btn-lg" type="button" ><?= Yii::t('app', 'Keyingi'); ?> <i class="fa fa-chevron-right"></i></button>
        <div id="send">
        <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-download"></i>' . ' Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-lg' : 'btn btn-primary'] ) ?>
        </div>
      </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("  
  $('#inrelative').hide();
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
    step=1; 
    $('.btn-success').hide();
    $('#send').hide();
    $('#back').hide();
    $('#kus-wed_name').parents('.form-group').hide();
    $('#kus-which_school').parents('.form-group').hide();
    $('#next').click(function(){            
  var n=step;
     if(step<4)
         {

  n++;
         curStepBtn =$('.nav-tabs > li:nth-of-type('+n+') > a');
  step =n;
    curStepBtn.removeClass('disabled').click();
    $('.step-txt').removeClass('text-disable');
        }
      });
//////////////////////////////////////////////////////////////////////////////////
       $('#back').click(function(){            
  var n=step;
     if(step>1)
         {
  n--;
         curStepBtn =$('.nav-tabs > li:nth-of-type('+n+') > a');
  step =n;
    curStepBtn.removeClass('disabled').click();
    $('.step-txt').removeClass('text-disable');
        }
      });
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