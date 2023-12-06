<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => ["type"=>"INT","auto_increment"=>true],
            "name" => ["type"=> "VARCHAR","constraint"=>'64'],
            "email" => ["type"=> "VARCHAR","constraint"=>'128'],
            "groupid" => ["type"=> "INT"],
            "rate" => ["type"=> "FLOAT"],
            "imagepath" => ["type"=> "VARCHAR", "constraint"=>'255'],

            "created_at datetime default current_timestamp",
            "updated_at datetime default current_timestamp"
        ]);
        $this->forge->addKey("id", true);
        $this->forge->addForeignKey("groupid", "groups","id");
        $this->forge->createTable("students");
    }

    public function down()
    {
        $this->forge->dropTable("students");
    }
}
