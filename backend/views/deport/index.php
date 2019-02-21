<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DeportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Deports');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deport-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Deport'), ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'arrival_country_id',
            // 'living_foreign_place',
            // 'offense_article',
            // 'offense_id',
            // 'penalty_id',
            // 'deport_date',
            // 'deport_route:ntext',
            // 'creation_date',
            // 'living_uzb_place',
            // 'add_info',
            // 'Send_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
