<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Groups extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => ["type"=>"INT","auto_increment"=>true],
            "groupname" => ["type"=> "VARCHAR","constraint"=>'32'],
            "created_at datetime default current_timestamp",
            "updated_at datetime default current_timestamp"
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("groups");
    }

    public function down()
    {
        $this->forge->dropTable("groups");
    }
}
