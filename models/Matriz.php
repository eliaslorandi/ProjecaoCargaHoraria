<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matriz".
 *
 * @property int $ID
 * @property string $SIGLA
 * @property int $CH_TOTAL
 * @property int $CURSO_ID
 */
class Matriz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matriz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SIGLA', 'CH_TOTAL', 'CURSO_ID'], 'required'],
            [['CH_TOTAL', 'CURSO_ID'], 'integer'],
            [['SIGLA'], 'string', 'max' => 99],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SIGLA' => 'Sigla',
            'CH_TOTAL' => 'Carga Horária',
            'CURSO_ID' => 'Curso Id',
        ];
    }
}
