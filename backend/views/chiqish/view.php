<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Chiqish */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chiqishes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chiqish-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'division_id',
            'pinpp',
            'surname_cyrillic',
            'name_cyrillic',
            'patronym_cyrillic',
            'surname_latin',
            'name_latin',
            'patronym_latin',
            'birth_date',
            'sex_id',
            'nationality_id',
            'marital_status_id',
            'birth_country_id',
            'birth_region_id',
            'birth_district_id',
            'birth_place_id',
            'birth_place_latin',
            'document_type_id',
            'doc_seria',
            'doc_number',
            'date_begin_document',
            'date_end_document',
            'document_div_id',
            'document_div_place',
            'living_country_id',
            'living_region_id',
            'living_district_id',
            'living_place_id',
            'living_street_id',
            'living_block',
            'living_house',
            'living_flat',
            'data_out',
            'arrival_country_id',
            'appeal_type',
            'living_foreign_place',
            'application_date',
            'decree_number',
            'decree_date',
            'document_delivery_consul_date',
            'reference_exit_number',
            'reference_exit_date',
            'creation_date',
            'living_uzb_place',
            'send_status',
            'add_info',
        ],
    ]) ?>

</div>
