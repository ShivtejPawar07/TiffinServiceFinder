<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHealthHubTables extends Migration
{
    public function up()
    {
        // Check if 'person' table already exists
        if (!$this->db->tableExists('person')) {
            $this->forge->addField([
                'p_id' => ['type' => 'BIGSERIAL', 'null' => false],
                'name' => ['type' => 'VARCHAR', 'constraint' => 150],
                'email' => ['type' => 'VARCHAR', 'constraint' => 100],
                'phone_no' => ['type' => 'VARCHAR', 'constraint' => 20],
                'address' => ['type' => 'TEXT'],
                'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            ]);
            $this->forge->addPrimaryKey('p_id');
            $this->forge->addUniqueKey('email');
            $this->forge->createTable('person');
        }

        // Check if 'locations' table exists
        if (!$this->db->tableExists('locations')) {
            $this->forge->addField([
                'l_id' => ['type' => 'BIGSERIAL', 'null' => false],
                'name' => ['type' => 'VARCHAR', 'constraint' => 100],
                'city' => ['type' => 'VARCHAR', 'constraint' => 100],
                'state' => ['type' => 'VARCHAR', 'constraint' => 100],
                'country' => ['type' => 'VARCHAR', 'constraint' => 100],
                'p_code' => ['type' => 'VARCHAR', 'constraint' => 20],
            ]);
            $this->forge->addPrimaryKey('l_id');
            $this->forge->createTable('locations');
        }

        // Check if 'admin' table exists
        if (!$this->db->tableExists('admin')) {
            $this->forge->addField([
                'a_id' => ['type' => 'BIGSERIAL', 'null' => false],
                'name' => ['type' => 'VARCHAR', 'constraint' => 100],
                'email' => ['type' => 'VARCHAR', 'constraint' => 100],
                'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            ]);
            $this->forge->addPrimaryKey('a_id');
            $this->forge->addUniqueKey('email');
            $this->forge->createTable('admin');
        }

        // Check if 'tiffin_services' table exists
        if (!$this->db->tableExists('tiffin_services')) {
            $this->forge->addField([
                'h_id' => ['type' => 'BIGSERIAL', 'null' => false],
                'name' => ['type' => 'VARCHAR', 'constraint' => 150],
                'address' => ['type' => 'TEXT'],
                'city' => ['type' => 'VARCHAR', 'constraint' => 100],
                'state' => ['type' => 'VARCHAR', 'constraint' => 100],
                'phone_no' => ['type' => 'VARCHAR', 'constraint' => 20],
                'email' => ['type' => 'VARCHAR', 'constraint' => 100],
            
                'specializations'  => ['type' => 'TEXT', 'null' => true], // Allow NULL values
                'website_link' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'password' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true], // Allow NULL
                'a_id' => ['type' => 'BIGINT', 'null' => false],
                'l_id' => ['type' => 'BIGINT', 'null' => false],
                'created_at' => ['type' => 'TIMESTAMP', 'null' => false, 'default' => null],
            ]);
            $this->forge->addPrimaryKey('h_id');
            $this->forge->addForeignKey('a_id', 'admin', 'a_id', 'CASCADE', 'CASCADE');
            $this->forge->addForeignKey('l_id', 'locations', 'l_id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('tiffin_services');
        }

        // Check if 'specializations' table exists
        if (!$this->db->tableExists('specializations')) {
            $this->forge->addField([
                's_id' => ['type' => 'BIGSERIAL', 'null' => false],
                'name' => ['type' => 'VARCHAR', 'constraint' => 150],
            ]);
            $this->forge->addPrimaryKey('s_id');
            $this->forge->createTable('specializations');
        }

        // Check if 'hospital_specializations' table exists
        if (!$this->db->tableExists('tiffin_services_specializations')) {
            $this->forge->addField([
                'h_id' => ['type' => 'BIGINT', 'null' => false],
                's_id' => ['type' => 'BIGINT', 'null' => false],
            ]);
            $this->forge->addForeignKey('h_id', 'tiffin_services', 'h_id', 'CASCADE', 'CASCADE');
            $this->forge->addForeignKey('s_id', 'specializations', 's_id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('tiffin_services_specializations');
        }

        // Check if 'ratings' table exists
        if (!$this->db->tableExists('ratings')) {
            $this->forge->addField([
                'r_id' => ['type' => 'BIGSERIAL', 'null' => false],
                'review' => ['type' => 'TEXT'],
                'p_id' => ['type' => 'BIGINT', 'null' => false],
                
            ]);
            $this->forge->addPrimaryKey('r_id');
            $this->forge->addForeignKey('p_id', 'person', 'p_id', 'CASCADE', 'CASCADE');
          
            $this->forge->createTable('ratings');
        }
    }

    public function down()
    {
        $this->forge->dropTable('ratings', true);
        $this->forge->dropTable('tiffin_services_specializations', true);
        $this->forge->dropTable('specializations', true);
        $this->forge->dropTable('tiffin_services', true);
        $this->forge->dropTable('admin', true);
        $this->forge->dropTable('locations', true);
        $this->forge->dropTable('person', true);
    }
}
