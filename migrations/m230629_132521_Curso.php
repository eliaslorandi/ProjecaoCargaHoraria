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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230629_132521_Curso cannot be reverted.\n";

        return false;
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
