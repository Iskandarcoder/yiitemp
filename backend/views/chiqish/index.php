<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChiqishSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Chiqishes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chiqish-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Chiqish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
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
            // 'data_out',
            // 'arrival_country_id',
            // 'appeal_type',
            // 'living_foreign_place',
            // 'application_date',
            // 'decree_number',
            // 'decree_date',
            // 'document_delivery_consul_date',
            // 'reference_exit_number',
            // 'reference_exit_date',
            // 'creation_date',
            // 'living_uzb_place',
            // 'send_status',
            // 'add_info',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
