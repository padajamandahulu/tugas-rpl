<?php

namespace App\Controllers;

use App\Models\Content;
use App\Models\UserModel;
use App\Models\News;
use App\Models\PreferenceModel;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Web Education '
        ];
        return view('pages/home', $data);
    }
    public function courses()
    {
        $pager = \Config\Services::pager();
        $biodata = new Content();
        $data = $biodata->getContent();
        return view('pages/courses', compact('data'));
    }
    public function courses_detail()
    {
        $pager = \Config\Services::pager();
        $biodata = new Content();
        $data = $biodata->getContent();
        return view('pages/courses_detail', compact('data'));
    }
    public function news()
    {
        $pager = \Config\Services::pager();
        $biodata = new News();
        $data = $biodata->getBlog();

        // Query distinct categories
        $db = \Config\Database::connect();
        $builder = $db->table('content'); // Replace 'your_table_name' with the actual table name
        $builder->distinct()->select('categories');
        $query = $builder->get();
        $categories = $query->getResultArray();

        $biodata = new Content();
        $data2 = $biodata->getContent();

        return view('pages/news', compact('data', 'data2', 'categories'));
    }
    public function category()
    {
        $biodata = new Content();
        $data = $biodata->getContent();
        return view('pages/category', compact('data'));
    }
    public function signin()
    {
        helper(['form']);
        echo view('signin');
    }
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $userPreferenceModel = new PreferenceModel(); // Assuming you have a model for user preferences
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];

            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                // Check if the user has preferences
                $hasPreferences = $userPreferenceModel->where('email', $email)->countAllResults();

                if ($hasPreferences > 0) {
                    // If the user has preferences, redirect to home
                    $ses_data = [
                        'id' => $data['id'],
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/home');
                } else {
                    $ses_data = [
                        'id' => $data['id'],
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($ses_data);
                    // If the user does not have preferences, redirect to preferences
                    return redirect()->to('/references');
                }
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }

    public function signup()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
    public function register()
    {
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
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
    public function search()
    {
        $data['keyword'] = $this->input->get('keyword');
        $this->load->model('content');
        $data['search_result'] = $this->content->search($data['keyword']);
        $this->load->view('pages/about', $data);
    }
    public function user_preferences()
    {
        $biodata = new Content();
        $data = $biodata->getContent();
        return view('user_preferences', compact('data'));
    }
}
