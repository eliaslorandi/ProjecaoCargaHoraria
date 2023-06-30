<?php

use yii\db\Migration;

/**
 * Class m230629_133148_DetalheOferta
 */
class m230629_133148_DetalheOferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #DETALHEOFERTA(ID, ANO, SEMESTRE, DISCIPLINA_FK, OFERTA_FK)
        $this->createTable('DETALHEOFERTA', [
            'ID' => $this->primaryKey(),
            'ANO' => $this->string(10)->notNull(),
            'SEMESTRE' => $this->string(10)->notNull(),
            'DISCIPLINA_ID' => $this->integer(),
            'OFERTA_ID' => $this->integer(),
        ]);
        $this->addForeignKey('DISCIPLINA_DE_FK', 'DETALHEOFERTA', 'DISCIPLINA_ID', 'DISCIPLINA', 'ID', 'RESTRICT');
        $this->addForeignKey('OFERTA_DE_FK', 'DETALHEOFERTA', 'OFERTA_ID', 'OFERTA', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('DISCIPLINA_DE_FK', 'DETALHEOFERTA');
        $this->dropForeignKey('OFERTA_DE_FK', 'DETALHEOFERTA');
        $this->dropTable('DETALHEOFERTA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230629_133148_DetalheOferta cannot be reverted.\n";

        return false;
    }
    */
}
