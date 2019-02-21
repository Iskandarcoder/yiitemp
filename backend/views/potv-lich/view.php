<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PotvLich */

$this->title = $model->p_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potv Liches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potv-lich-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->p_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->p_id], [
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
            'p_id',
            'p_guid',
            'p_dockind',
            'p_division',
            'p_citizen',
            'p_pk',
            'p_surnamec',
            'p_namec',
            'p_patronymc',
            'p_surnameL',
            'p_nameL',
            'p_patronymL',
            'p_birth',
            'p_birthcomp',
            'p_sex',
            'p_nation',
            'p_surnameold',
            'p_nameold',
            'p_patronymold',
            'p_countryb',
            'p_regionb',
            'p_districtb',
            'p_birthb',
            'p_birthe',
            'p_doctypeb',
            'p_seryb',
            'p_numberb',
            'p_issuedbyb',
            'p_datebegb',
            'p_country',
            'p_region',
            'p_district',
            'p_place',
            'p_street',
            'p_house',
            'p_korpus',
            'p_flat',
            'p_address',
            'p_comment',
            'p_dateenter',
            'p_MVD_guid',
            'p_surnameeng',
            'p_nameeng',
            'p_birthplaceeng',
        ],
    ]) ?>

</div>
