<?php

use yii\db\Migration;

/**
 * Class m230629_133125_Oferta
 */
class m230629_133125_Oferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #OFERTA(ID, SEMESTRE, INICIO, MATRIZ_FK, USUARIO_FK, DATA_REGISTRO)
        $this->createTable('OFERTA', [
            'ID' => $this->primaryKey(),
            'SEMESTRE' => $this->string(10)->notNull(),
            'INICIO' => $this->date(),
            'MATRIZ_ID' => $this->integer(),
            'USUARIO_ID' => $this->integer(),
            'DATA_REGISTRO' => $this->date(),
        ]);
        $this->addForeignKey('MATRIZ_FK', 'OFERTA', 'MATRIZ_ID', 'MATRIZ', 'ID', 'RESTRICT');
        $this->addForeignKey('USUARIO_FK', 'OFERTA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('OFERTA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_133125_Oferta cannot be reverted.\n";

        return false;
    }
    */
}
