<?php

namespace App\Models;

use CodeIgniter\Model;

class Userpreferences extends Model
{
    protected $table = 'user_preferences';
    public function insertUser()
    {
        $this->db->insert('user_preferences', $data);
    }

    public function getContent()
    {
        return $this->findAll();
    }
 
}
