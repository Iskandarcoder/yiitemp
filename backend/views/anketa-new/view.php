<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AnketaNew */

$this->title = $model->p_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Anketa News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anketa-new-view">

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
    <?php echo '<img style="width:125; height:160px; overflow:hidden" src="data:image/jpeg;base64,'.base64_encode($model->p_photo).'"/>';?>
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
            'p_surnamel',
            'p_namel',
            'p_patronyml',
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
            'p_datebegb',
            'p_issuedbyb',
            'p_country',
            'p_region',
            'p_district',
            'p_place',
            'p_street',
            'p_certiftype',
            'p_house',
            'p_korpus',
            'p_flat',
            'p_address',
            'p_marital',
            'p_dateendb',
            'p_countryout',
            'p_addressout',
            'p_cause',
            'p_reasonb',
            'p_reasonfull',
            'p_dateout',
            'p_dateenter',
            //'p_photo',
            'p_work',
            'p_datesent',
            'p_status',
            'p_lan',
        ],
    ]) ?>

</div>
