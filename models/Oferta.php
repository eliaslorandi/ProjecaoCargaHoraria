<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oferta".
 *
 * @property int $ID
 * @property string $SEMESTRE
 * @property string|null $INICIO
 * @property int|null $MATRIZ_ID
 * @property int|null $USUARIO_ID
 * @property string|null $DATA_REGISTRO
 *
 * @property Detalheoferta[] $detalheofertas
 */
class Oferta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oferta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SEMESTRE'], 'required'],
            [['INICIO', 'DATA_REGISTRO'], 'safe'],
            [['MATRIZ_ID', 'USUARIO_ID'], 'integer'],
            [['SEMESTRE'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SEMESTRE' => 'Semestre',
            'INICIO' => 'Inicio',
            'MATRIZ_ID' => 'Matriz ID',
            'USUARIO_ID' => 'Usuario ID',
            'DATA_REGISTRO' => 'Data Registro',
        ];
    }

    /**
     * Gets query for [[Detalheofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetalheofertas()
    {
        return $this->hasMany(Detalheoferta::class, ['OFERTA_ID' => 'ID']);
    }
}
