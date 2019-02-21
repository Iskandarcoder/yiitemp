<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use backend\models\SpDivision;
use backend\models\Role;
use yii\helpers\ArrayHelper;


$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            
    <h1><?= Html::encode($this->title) ?></h1>
            <hr>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?=$form->field($model, 'role_id')->widget(Select2::classname(), [
                          'data' => ArrayHelper::map(Role::find()->all(), 'id', 'name'),
                          'language' => 'ru',
                          'options' => ['placeholder' => 'Role tanlang ...'],
                          'pluginOptions' => [
                              'allowClear' => true,
                              'multiple' => false,
                          ],
                      ]);
                      
                    ?>

                <?=$form->field($model, 'dvision_id')->widget(Select2::classname(), [
                          'data' => ArrayHelper::map(SpDivision::find()->where(['sp_idfirst' => 1])->all(), 'sp_id', 'sp_name_uz'),
                          'language' => 'ru',
                          'options' => ['placeholder' => 'Diplomatik vakolatxonani tanlang ...'],
                          'pluginOptions' => [
                              'allowClear' => true,
                              'multiple' => false,
                          ],
                      ]);
                      
                    ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                <div style="margin-left: 25px;">
                    <?= $form->field($model, 'is_active')->checkbox() ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>


</div>
</div>
</div>