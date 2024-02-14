<?php

namespace App\Controllers;

use App\Models\Content;

class Home extends BaseController
{
    public function index(): string
    {
        $biodata = new Content();
        $data = $biodata->getContent();
        return view('welcome_message', compact('data'));
    }
}
