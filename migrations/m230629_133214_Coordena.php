<?php

use yii\db\Migration;

/**
 * Class m230629_133214_Coordena
 */
class m230629_133214_Coordena extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #COORDENA(USUARIO_FK, CURSO_FK, INICIO, FIM)
        $this->createTable('COORDENA', [
            'USUARIO_ID' => $this->integer(),
            'CURSO_ID' => $this->integer(),
            'INICIO' => $this->date(),
            'FIM' => $this->date(),
        ]);
        $this->addPrimaryKey('PK_COORDENA', 'COORDENA', ['USUARIO_ID', 'CURSO_ID']);
        $this->addForeignKey('USUARIO_C_FK', 'COORDENA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('CURSO_C_FK', 'COORDENA', 'CURSO_ID', 'CURSO', 'ID', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('USUARIO_C_FK', 'COORDENA');
        $this->dropForeignKey('CURSO_C_FK', 'COORDENA');
        $this->dropTable('COORDENA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_133214_Coordena cannot be reverted.\n";

        return false;
    }
    */
}
