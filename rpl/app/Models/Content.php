<?php

namespace App\Models;

use CodeIgniter\Model;

class Content extends Model
{
    protected $table = 'content';

    public function getContent()
    {
        return $this->findAll();
    }
    public function search($keyword)
    {
        if (!$keyword) {
            return null;
        }
        $this->db->like('categories', $keyword);
        $this->db->or_like('type1', $keyword);
        $query = $this->db->get($this->_table);
        return $query->result();
    }
}
