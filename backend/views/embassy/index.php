<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmbassySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Embassies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="embassy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Embassy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_cyrl',
            'name_en',
            'name_qrc',
            'name_qrl',
            // 'name_ru',
            // 'name_uz',
            // 'text_cyrl:ntext',
            // 'text_en:ntext',
            // 'text_qrc:ntext',
            // 'text_qrl:ntext',
            // 'text_ru:ntext',
            // 'text_uz:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
