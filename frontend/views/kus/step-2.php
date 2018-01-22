<div  class="tab-pane"  id="step-2">
   <?= $form->field($model, 'doc_seria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document_type_id')->textInput() ?>

    <?= $form->field($model, 'doc_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_begin_document')->textInput() ?>

    <?= $form->field($model, 'date_endocument')->textInput() ?>

    <?= $form->field($model, 'document_div_id')->textInput() ?>

    <?= $form->field($model, 'document_div_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_country_id')->textInput() ?>

</div>