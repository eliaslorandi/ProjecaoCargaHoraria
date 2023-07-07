<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property int $ID
 * @property string $NOME
 * @property int $CH
 * @property int $PERIODO
 * @property int|null $NUCLEO_ID
 * @property int|null $MATRIZ_ID
 *
 * @property Detalheoferta[] $detalheofertas
 * @property Nucleo $nUCLEO
 */
class Disciplina extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disciplina';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME', 'CH', 'PERIODO'], 'required'],
            [['CH', 'PERIODO', 'NUCLEO_ID', 'MATRIZ_ID'], 'integer'],
            [['NOME'], 'string', 'max' => 99],
            [['NUCLEO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Nucleo::class, 'targetAttribute' => ['NUCLEO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'Id',
            'NOME' => 'Nome',
            'CH' => 'Carga Horária',
            'PERIODO' => 'Período',
            'NUCLEO_ID' => 'Núcleo',
            'MATRIZ_ID' => 'Matriz',
        ];
    }

    /**
     * Gets query for [[Detalheofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetalheofertas()
    {
        return $this->hasMany(Detalheoferta::class, ['DISCIPLINA_ID' => 'ID']);
    }

    /**
     * Gets query for [[NUCLEO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNucleo()
    {
        return $this->hasOne(Nucleo::class, ['ID' => 'NUCLEO_ID']);
    }
}
