<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Asosiy */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Asosiys'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asosiy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
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
            'ID',
            'REG_DATE',
            'EMBASSY',
            'USERNAME',
            'SRC_REGNO',
            'STATE_ID',
            'FULL_NAME',
            'OTHER_NAME',
            'DOB',
            'TUG_JOYI',
            'POB',
            'SEX',
            'WORK_PLACE',
            'ADDRESS',
            'MARITAL',
            'VISA_TYPE',
            'DATE_FROM',
            'DATE_UPTO',
            'FOREIGN_AD',
            'OFFENCE_TY',
            'REMARKS',
            'Q_MALUMOT',
            'FOTO',
            'XOLAT',
            'RASM:ntext',
            'PSP_SERIAL',
            'PSP_NUMBER',
            'PSP_AUTHOR',
            'PSP_ISSDAT',
            'PSP_TERM',
            'TULOV',
            'FAKT_RAS',
            'KOD1',
            'KOD2',
            'KOD3',
            'NOM_SPRAV',
            'YASH_VIL',
            'YASH_TUM',
            'REQ_TYPE',
            'KOX',
            'TASDIQ_S',
            'JAVOB',
            'J_DATA',
            'ISSUE_DAT',
            'EXPIRE_DAT',
            'HAMROH',
            'SERT_RAQ',
            'HAMROH2',
            'HAMROH3',
            'DOC1:ntext',
            'DOC2:ntext',
            'DOC3:ntext',
            'KU_MVNOM',
            'KU_MVDAT',
            'MVKU_NOM',
            'MVKU_DAT',
        ],
    ]) ?>

</div>
