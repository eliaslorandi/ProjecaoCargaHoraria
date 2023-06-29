<?php

use yii\db\Migration;

/**
 * Class m230629_121350_Nucleo
 */
class m230629_121350_Nucleo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #NUCLEO(ID, NOME)
        $this->createTable('NUCLEO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string(99),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('NUCLEO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_121350_Nucleo cannot be reverted.\n";

        return false;
    }
    */
}
