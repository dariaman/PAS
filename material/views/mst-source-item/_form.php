<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\material\models\MstSourceItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-source-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_source_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_source_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
