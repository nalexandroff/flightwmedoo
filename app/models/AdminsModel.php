<?php

namespace app\models;

use Medoo\Medoo;

class AdminsModel
{
    protected Medoo $db;

    public function __construct()
    {
        $this->db = \Flight::db();
    }

    public function getAdmins()
    {
        return $this->db->select('admins', '*');
    }

    public function getAdmin($id)
    {
        return $this->db->get('admins', '*', ['admins_id' => $id]);
    }

    public function createAdmin($data)
    {
        return $this->db->insert('admins', $data);
    }

    public function updateAdmin($id, $data)
    {
        return $this->db->update('admins', $data, ['admins_id' => $id]);
    }

    public function deleteAdmin($id)
    {
        return $this->db->delete('admins', ['admins_id' => $id]);
    }
}