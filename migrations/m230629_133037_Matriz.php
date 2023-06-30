<?php

use yii\db\Migration;

/**
 * Class m230629_133037_Matriz
 */
class m230629_133037_Matriz extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #MATRIZ(ID, SIGLA, CH_TOTAL, CURSO_FK)
        $this->createTable('MATRIZ', [
            'ID' => $this->primaryKey(),
            'SIGLA' => $this->string(10)->notNull(),
            'CH_TOTAL' => $this->integer(),
            'CURSO_ID' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('MATRIZ');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_133037_Matriz cannot be reverted.\n";

        return false;
    }
    */
}
