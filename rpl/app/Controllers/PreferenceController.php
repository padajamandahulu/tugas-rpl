<?php

namespace App\Controllers;

use App\Models\Content;
use App\Models\PreferenceModel;

class PreferenceController extends BaseController
{
    public function index()
    {
        $biodata = new Content();
        $data = $biodata->getContent();

        $session = \Config\Services::session();
        $email = $session->get('email');

        return view('references', ['data' => $data, 'email' => $email]); // Kirim data email ke view
    }

    public function store()
    {
        $session = \Config\Services::session();
        $email = $session->get('email');

        $preferences = $this->request->getVar('preferences');
        if (!empty($preferences)) {
            $preferenceModel = new PreferenceModel();

            foreach ($preferences as $preference) {
                $preferenceModel->insert(['category' => $preference, 'email' => $email]);
            }
            return redirect()->to('/home');
        } else {
            return redirect()->to('/home');
        }
    }
}
