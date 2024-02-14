<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {

        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
    public function register()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        } else {
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
    }
}
