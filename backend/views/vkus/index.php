<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VkusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Vkuses');
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
            Vaqtinchalik konsullik hisobiga olish
            </h3>
            <hr>
            <!-- END PAGE HEADER-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Anketa Kiritish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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
            // 'document_type_id',
             'doc_seria',
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
            // 'status',
            // 'adinfo',
            // 'consular_account_type',
            // 'wed_name',
            // 'education',
            // 'education_date',
            // 'which_school',

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
</div>
</div>
</div>