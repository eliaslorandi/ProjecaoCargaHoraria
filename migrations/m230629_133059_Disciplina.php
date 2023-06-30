<?php

use yii\db\Migration;

/**
 * Class m230629_133059_Disciplina
 */
class m230629_133059_Disciplina extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #DISCIPLINA(ID, NOME, CH, PERIODO, NUCLEO_IF, MATRIZ_ID)
        $this->createTable('DISCIPLINA', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string(99)->notNull(),
            'CH' => $this->smallInteger()->notNull(),
            'PERIODO' => $this->smallInteger()->notNull(),
            'NUCLEO_ID' => $this->integer(),
            'MATRIZ_ID' => $this->integer(),
        ]);
        $this->addForeignKey('NUCLEO_DI_FK', 'DISCIPLINA', 'NUCLEO_ID', 'NUCLEO', 'ID', 'RESTRICT');
        $this->addForeignKey('MATRIZ_DI_FK', 'DISCIPLINA', 'MATRIZ_ID', 'MATRIZ', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('NUCLEO_DI_FK', 'DISCIPLINA');
        $this->dropForeignKey('MATRIZ_DI_FK', 'DISCIPLINA');
        $this->dropTable('DISCIPLINA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_133059_Disciplina cannot be reverted.\n";

        return false;
    }
    */
}
