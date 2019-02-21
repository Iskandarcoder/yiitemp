<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LostDocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Lost Docs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lost-doc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Lost Doc'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'division_id',
            'pinpp',
            'surname_cyrillic',
            'name_cyrillic',
            // 'patronym_cyrillic',
            // 'surname_latin',
            // 'name_latin',
            // 'patronym_latin',
            // 'birth_date',
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
            // 'doc_seria',
            // 'doc_number',
            // 'date_begin_document',
            // 'date_end_document',
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
            // 'arrival_reason_id',
            // 'arrival_date',
            // 'cause_id',
            // 'work_place',
            // 'creation_date',
            // 'living_uzb_place',
            // 'add_info',
            // 'living_foreign_country_id',
            // 'living_foreign_place',
            // 'Send_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
