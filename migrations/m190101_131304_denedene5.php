<?php

use yii\db\Migration;

/**
 * Class m190101_131304_denedene5
 */
class m190101_131304_denedene5 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('derspro', [
            'userID' => $this->integer(),
            'dersAdi' => $this->string(20),
            'sinif' => $this->string(10),
           
            'PRIMARY KEY(userID)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190101_131304_denedene5 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190101_131304_denedene5 cannot be reverted.\n";

        return false;
    }
    */
}
