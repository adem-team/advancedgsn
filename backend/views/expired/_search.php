<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ExpiredSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="expired-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'STATUS_ID') ?>

    <?= $form->field($model, 'STATUS') ?>

    <?= $form->field($model, 'DURASI_WAKTU') ?>

    <?= $form->field($model, 'CANCEL_TIME') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
