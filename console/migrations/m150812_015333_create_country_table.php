<?php

use yii\db\Schema;
use yii\db\Migration;

class m150812_015333_create_country_table extends Migration
{
    public function up()
    {
        $this->createTable('country', [
            'code' => Schema::TYPE_STRING . ' NOT NULL',
            'country' => Schema::TYPE_STRING . ' NOT NULL',
            'population' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addPrimaryKey('pk_code', 'country', 'code');
    }

    public function down()
    {
        $this->dropTable('country');

        return false;
    }
}
