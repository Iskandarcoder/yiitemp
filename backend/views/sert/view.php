<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sert */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Serts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sert-view">

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
<?php
    echo '<img src="data:image/jpeg;base64,'.base64_encode($model->photo).'"/>';
   ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_mvd',
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
            'sex_id',
            'nationality_id',
            'marital_status_id',
            'birth_country_id',
            'birth_region_id',
            'birth_district_id',
            'birth_place_id',
            'birth_street_id',
            'birth_block',
            'birth_house',
            'birth_flat',
            'birth_place_latin',
            'document_type',
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
            'living_foreign_country_id',
            'living_foreign_place',
            'arrival_reason_id',
            'arrival_date',
            'cause_id',
            'work',
            'certificate_seria',
            'certificate_number',
            'certificate_date',
            'validity_date_certificate',
            'living_uzb_place',
            'creation_date',
            'send_status',
            'status_mvd',
            'date_mvd',
            'comment',
            'print_status',
            'annul_status',
            'oplata',
            'rasxod',
            'nazorat',
            'Fam',
            'Ism',
            'Sharif',
            'Tug_Sana',
            'surname_eng',
            'name_eng',
        ],
    ]) ?>

</div>
