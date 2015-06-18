<?php

use yii\db\Migration;
use yii\db\Schema;

class m150616_000001_add_user_id extends Migration
{
    public function up()
    {
		$this->addColumn( '{{%attach_file}}', 'user_id', Schema::TYPE_INTEGER . ' UNSIGNED' );
    }

    public function down()
    {
		$this->dropColumn( '{{%attach_file}}', 'user_id' );
    }
}
