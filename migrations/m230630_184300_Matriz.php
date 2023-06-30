<?php

use yii\db\Migration;

/**
 * Class m230630_184300_Matriz
 */
class m230630_184300_Matriz extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #MATRIZ(ID, SIGLA, CH_TOTAL, CURSO_ID)
        $this->createTable('matriz', [
            'ID' => $this->primaryKey(),
            'SIGLA' => $this->string(99)->notNull(),
            'CH_TOTAL' => $this->integer()->notNull(),
            'CURSO_ID' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('matriz');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230630_184300_Matriz cannot be reverted.\n";

        return false;
    }
    */
}
