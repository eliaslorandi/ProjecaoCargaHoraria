<?php

use app\models\Nucleo;
use app\models\Matriz;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Disciplina $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="disciplina-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CH')->textInput() ?>

    <?= $form->field($model, 'PERIODO')->textInput() ?>

    <?= $form->field($model, 'NUCLEO_ID')->
        dropDownList(ArrayHelper::map(Nucleo::find()->orderBy('NOME')->all(), 'ID', 'NOME'),
            ['prompt' => 'Selecione um núcleo'])
    ?>

    <?= $form->field($model, 'MATRIZ_ID')->
        dropDownList(ArrayHelper::map(Matriz::find()->orderBy('SIGLA')->all(), 'ID', 'SIGLA')
            , ['prompt' => 'Selecione uma Matriz'])
    ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
