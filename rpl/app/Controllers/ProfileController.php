<?php

namespace App\Controllers;

use CodeIgniter\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Hello : " . $session->get('name');
    }
}
