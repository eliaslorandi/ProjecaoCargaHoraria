<?php

use app\models\Disciplina;
use app\models\Nucleo;
use app\models\Matriz;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\DisciplinaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Disciplinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciplina-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova Disciplina', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            [
                'attribute' => 'NOME',
                'filterInputOptions' => [
                    'class' => 'form-control', 
                    'placeholder' => 'Buscar disciplina'
                ],
            ],
            'CH',
            'PERIODO',
            [
                'attribute' => 'nucleo.NOME',
                'label' => 'Núcleo',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'nucleo.NOME',
                    ArrayHelper::map(Nucleo::find()->asArray()->orderBy('NOME')->all(), 'NOME', 'NOME'),
                    ['class' => 'form-control', 'prompt' => 'Selecione um Núcleo']
                )

            ],
            [
                'attribute' => 'matriz.SIGLA',
                'label' => 'Matriz',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'matriz.SIGLA',
                    ArrayHelper::map(Matriz::find()->asArray()->orderBy('SIGLA')->all(), 'SIGLA', 'SIGLA'),
                    ['class' => 'form-control', 'prompt' => 'Selecione uma Matriz']
                )
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Disciplina $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                }
            ],
        ],
    ]); ?>


</div>