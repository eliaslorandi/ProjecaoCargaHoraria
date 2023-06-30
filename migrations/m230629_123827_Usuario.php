<?php

use yii\db\Migration;

/**
 * Class m230629_123827_Usuario
 */
class m230629_123827_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #USUARIO(ID, NOME, EMAIL, SENHA, NUCLEO_ID)
        $this->createTable('USUARIO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string(99)->notNull(),
            'EMAIL' => $this->string(99),
            'SENHA' => $this->string(99),
            'NUCLEO_ID' => $this->integer(),
        ]);
        $this->addForeignKey('NUCLEO_FK', 'USUARIO', 'NUCLEO_ID', 'NUCLEO', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('NUCLEO_FK', 'USUARIO');
        $this->dropTable('USUARIO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_123827_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
