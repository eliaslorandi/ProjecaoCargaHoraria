<?php

use yii\db\Migration;

/**
 * Class m230629_132521_Curso
 */
class m230629_132521_Curso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #CURSO(ID, NOME, CH_TOTAL, Q_PERIODOS, SIGLA)
        $this->createTable('CURSO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string(99)->notNull(),
            'CH_TOTAL' => $this->integer(),
            'Q_PERIODOS' => $this->integer(),
            'SIGLA' => $this->string(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('CURSO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_132521_Curso cannot be reverted.\n";

        return false;
    }
    */
}
