<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DetalheOferta $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detalhe-oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ANO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEMESTRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DISCIPLINA_ID')->textInput() ?>

    <?= $form->field($model, 'OFERTA_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
