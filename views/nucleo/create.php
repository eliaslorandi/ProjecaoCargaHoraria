<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Nucleo $model */

$this->title = 'Salvar';
$this->params['breadcrumbs'][] = ['label' => 'Nucleos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nucleo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
