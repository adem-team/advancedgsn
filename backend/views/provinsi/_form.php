<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Provinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="provinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PROVINCE_ID')->textInput() ?>

    <?= $form->field($model, 'PROVINCE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
