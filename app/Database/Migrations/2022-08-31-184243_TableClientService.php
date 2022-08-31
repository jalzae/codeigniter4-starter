<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableClientService extends Migration
{
    public function up()
    {
        $fields = [
            "id" => ["type" => "INT", "constraint" => 11, "null" => false, "auto_increment" => true,],
            "id_client" => ["type" => "INT", "constraint" => 11, "null" => false,],
            "id_service" => ["type" => "INT", "constraint" => 11, "null" => false,],
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
        $this->forge->createTable("client_service", false, $attributes);
    }
    public function down()
    {
        return $this->db->query("DROP TABLE `client_service`");
    }
}
