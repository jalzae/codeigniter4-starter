<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableMaster extends Migration
{
    public function up()
    {
        $fields = [
            "id" => ["type" => "INT", "constraint" => 11, "null" => false, "auto_increment" => true, "unique" => true],
            "username" => ["type" => "VARCHAR", "constraint" => 200, "null" => false, "unique" => true],
            "password" => ["type" => "VARCHAR", "constraint" => 300, "null" => false,],
            "id_role" => ["type" => "INT", "constraint" => 2, "null" => false,],
            "is_active" => ["type" => "INT", "constraint" => 1, "null" => false,],
            "status_delete" => ["type" => "INT", "constraint" => 1, "null" => true,],
            "entry_date" => ["type" => "DATETIME", "null" => false,],
            "update_date" => ["type" => "DATETIME", "null" => false,],
            "delete_date" => ["type" => "DATETIME", "null" => true,],
            "entry_user" => ["type" => "VARCHAR", "constraint" => 200, "null" => false,],
            "update_user" => ["type" => "VARCHAR", "constraint" => 200, "null" => false,],
            "delete_user" => ["type" => "VARCHAR", "constraint" => 200, "null" => true,],
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id", true);
        $attributes = ["ENGINE" => "InnoDB"];
        $this->forge->createTable("master", false, $attributes);
    }
    public function down()
    {
        return $this->db->query("DROP TABLE `master`");
    }
}
