<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
use yii\widgets\Pjax;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doimiy konsullik hisobiga olish';
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
    /*.grid-view td {
        white-space: nowrap;
    }*/
    .grid-view td {
        white-space:pre-line;
        text-align: left;
    }
    .grid-view {
        text-align: center;
    }
    .grid-view th {
        background-color: #337ab7;
        text-align: center;
        vertical-align: middle !important;
    }
    a {
       /* color: #fff;*/
    }
    a:hover {
        color: #ddd;
    }
    .summary {
        text-align: right;
        margin-bottom: 25px;
    }
    .nav-pills > li {
        float: none;
        display: inline-block;
    }
    .nav > li > a:hover, .nav > li > a:focus {
        background: inherit;
    }
    .btn-danger-sub {
        background-color: #B42E2A;
        border-color: #A51F1B;
    }
    .btn-danger-sub:hover {
        background-color: #A21C18;
        border-color: #900A06;
    }
    .btn-success-sub {
        color: #fff;
        background-color: #389438;
        border-color: #298529;
    }
    .btn-success-sub:hover {
        color: #fff;
        background-color: #268226;
        border-color: #177317;
    }
</style>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            
            
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title" style="text-align: center;font-weight: bold;">
            Doimiy konsullik hisobiga olish
            </h3>
            <hr>
            <!-- END PAGE HEADER-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    

    <p>
        <?= Html::a('Anketa Kiritish', ['create'], ['class' => 'btn btn-success']) ?>
        <a class="btn btn-info" data-target="#stack1" data-toggle="modal"><i class="fa fa-fw fa-search"></i> Filter</a>
            <!-- /.modal -->
                            <div id="stack1" class="modal fade" tabindex="-1" data-width="600">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Doimiy konsullik hisobiga olish</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
    </p>




    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model){
            if($model->status == '0'){
                return['class'=>'success'];
            }else {
                return['class'=>''];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'reg_num',
            //'division_id',
            //'pinpp',
            //'surname_cyrillic',
            // 'name_cyrillic',
            // 'patronym_cyrillic',
             'surname_latin',
             'name_latin',
             'patronym_latin',
             'birth_date',
            // 'photo',
            // 'sex_id',
            // 'nationality_id',
            // 'marital_status_id',
            // 'birth_country_id',
            // 'birth_region_id',
            // 'birth_district_id',
            // 'birth_place_id',
            // 'birth_place_latin',
             'doc_seria',
            // 'document_type_id',
             'doc_number',
            // 'date_begin_document',
            // 'date_endocument',
            // 'document_div_id',
            // 'document_div_place',
            // 'living_country_id',
            // 'living_region_id',
            // 'living_district_id',
            // 'living_place_id',
            // 'living_street_id',
            // 'living_block',
            // 'living_house',
            // 'living_flat',
            // 'living_place_latin',
            // 'living_foreign_country_id',
            // 'living_foreign_place',
            // 'begin_date',
            // 'arrival_date',
            // 'work_place',
            // 'other_citizenship_id',
            // 'doc_adinfo',
            // 'creation_date',
            // 'foundation_cons_acc',
            // 'living_uzb_place',
            // 'senstatus',
            // 'endate',
            // 'reason_id',
             [
                'attribute' => 'status',
                'value'     => function ($model, $key, $index, $column) {
                    return $model->status == '1' ? 'Ro\'yhatga olingam' : 'Yangi talabnoma';
                },
                'filter'    => [1 => 'Ro\'yhatga olingam', 0 => 'Yangi talabnoma'],
            ],
            // 'adinfo',
            // 'consular_account_type',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}{print}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        if(Yii::$app->user->identity->role_id == 1 ){
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'lead-view'),
                        ]);
                    }
                    },

                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', $url, [
                                    'title' => Yii::t('app', 'lead-print'),
                        ]);
                    },

                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                    'title' => Yii::t('app', 'lead-update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        if(Yii::$app->user->identity->role_id == 1 ){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                    'title' => Yii::t('app', 'lead-delete'),
                        ]);
                        }
                    }

                  ],

            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    </div>
</div>
</div>
<?php
$this->registerJs("
    $('.date-clear').click(function(){
        $('#kussearch-birth_date').val('');
        $('#search-form').submit();
    });
");
?>