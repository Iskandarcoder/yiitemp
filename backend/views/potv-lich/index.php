<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PotvLichSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Potv Liches');
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            
            
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title" style="text-align: center;font-weight: bold;">
            Sertifikat olish uchun hujjatlarni tayyorlashda shaxsiy ma'lumotlarni kiritish
            </h3>
            <hr>
            <!-- END PAGE HEADER-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Potv Lich'), ['create'], ['class' => 'btn btn-success']) ?>
        <a class="btn btn-info" data-target="#stack1" data-toggle="modal"><i class="fa fa-fw fa-search"></i> Filter</a>
            <!-- /.modal -->
                            <div id="stack1" class="modal fade" tabindex="-1" data-width="600">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Sertifikat olish uchun hujjatlarni tayyorlashda shaxsiy ma'lumotlarni kiritish</h4>
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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'p_id',
            'p_guid',
            //'p_dockind',
            //'p_division',
            //'p_citizen',
            // 'p_pk',
            // 'p_surnamec',
            // 'p_namec',
            // 'p_patronymc',
             'p_surnameL',
             'p_nameL',
             'p_patronymL',
             'p_birth',
            // 'p_birthcomp',
            // 'p_sex',
            // 'p_nation',
            // 'p_surnameold',
            // 'p_nameold',
            // 'p_patronymold',
            // 'p_countryb',
            // 'p_regionb',
            // 'p_districtb',
            // 'p_birthb',
            // 'p_birthe',
            // 'p_doctypeb',
             'p_seryb',
             'p_numberb',
            // 'p_issuedbyb',
            // 'p_datebegb',
            // 'p_country',
            // 'p_region',
            // 'p_district',
            // 'p_place',
            // 'p_street',
            // 'p_house',
            // 'p_korpus',
            // 'p_flat',
            // 'p_address',
            // 'p_comment',
            // 'p_dateenter',
            // 'p_MVD_guid',
            // 'p_surnameeng',
            // 'p_nameeng',
            // 'p_birthplaceeng',

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
