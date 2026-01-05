<?php

namespace app\models;

use Medoo\Medoo;

class UsersModel
{
    protected Medoo $db;

    public function __construct()
    {
        $this->db = \Flight::db();
    }

    public function getUsers()
    {
        return $this->db->select('users', '*');
    }

    public function getUser($id)
    {
        return $this->db->get('users', '*', ['users_id' => $id]);
    }

    public function createUser($data)
    {
        return $this->db->insert('users', $data);
    }

    public function updateUser($id, $data)
    {
        return $this->db->update('users', $data, ['users_id' => $id]);
    }

    public function deleteUser($id)
    {
        return $this->db->delete('users', ['users_id' => $id]);
    }
}