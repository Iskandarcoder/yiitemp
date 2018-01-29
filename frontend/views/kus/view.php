<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kus */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
   <?php
    echo '<img src="data:image/jpeg;base64,'.base64_encode($model->photo).'"/>';
   ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'reg_num',
            'division_id',
            'pinpp',
            'surname_cyrillic',
            'name_cyrillic',
            'patronym_cyrillic',
            'surname_latin',
            'name_latin',
            'patronym_latin',
            'birth_date',
            //'photo',
            //base64_encode('photo'),
            //Html::img('photo'),

            'sex_id',
            'nationality_id',
            'marital_status_id',
            'birth_country_id',
            'birth_region_id',
            'birth_district_id',
            'birth_place_id',
            'birth_place_latin',
            'doc_seria',
            'document_type_id',
            'doc_number',
            'date_begin_document',
            'date_endocument',
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
            'living_place_latin',
            'living_foreign_country_id',
            'living_foreign_place',
            'begin_date',
            'arrival_date',
            'work_place',
            'other_citizenship_id',
            'doc_adinfo',
            'creation_date',
            'foundation_cons_acc',
            'living_uzb_place',
            'senstatus',
            'endate',
            'reason_id',
            'status',
            'adinfo',
            'consular_account_type',
        ],
    ]) ?>

</div>
