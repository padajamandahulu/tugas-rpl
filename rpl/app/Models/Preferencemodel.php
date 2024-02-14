<?php

namespace App\Models;

use CodeIgniter\Model;

class PreferenceModel extends Model
{
    protected $table = 'user_preferences';
    protected $allowedFields = ['category', 'email','is_active'];
    public function getContent()
    {
        return $this->findAll();
    }
}
