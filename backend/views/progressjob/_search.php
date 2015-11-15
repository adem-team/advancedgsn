<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProgressjobSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="progressjob-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PROGRESS_ID') ?>

    <?= $form->field($model, 'USER_ID') ?>

    <?= $form->field($model, 'MODUL') ?>

    <?= $form->field($model, 'JUDUL') ?>

    <?= $form->field($model, 'KETERANGAN') ?>

    <?php // echo $form->field($model, 'STAR_DATE') ?>

    <?php // echo $form->field($model, 'END_DATE') ?>

    <?php // echo $form->field($model, 'PROGRESS') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'KETERANGAN_DETAIL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
