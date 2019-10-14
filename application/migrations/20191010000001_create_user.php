<?php defined('BASEPATH') OR exit ('No direct scrit access is alowed');

class Migration_Create_User extends CI_Migration
{
    public function up()
    {
        if (!$this->db->table_exists('users')) {
            $this->dbforge->add_key('id', true);

            $this->dbforge->add_field([
                'id' =>[
                    'type'      => 'MEDIUMINT',
                    'constraint'=> 8,
                    'auto_increment' => true
                ],
                'username' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> 200,
                    'null'      => false
                ],
                'password' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> 200,
                    'null'      => false
                ],
                'created_at' => [
                    'type'      => 'INT',
                    'constraint'=> 11,
                    'null'      => false
                ],
                'deleted' => [
                    'type'      => 'INT',
                    'constraint'=> 1,
                    'default'   => 0
                ]
            ]);

            $this->dbforge->create_table('users');
        }
    }

    public function down()
    {
        $this->dbforge->drop_table('users');

    }
}