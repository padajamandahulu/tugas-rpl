<?php

namespace App\Controllers;

use App\Models\Content;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Web Education '
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        return view('pages/about');
    }
    public function courses()
    {
        $pager = \Config\Services::pager();
        $biodata = new Content();
        $data = $biodata->getContent();
        return view('pages/courses', compact('data'));
    }
    public function news()
    {

        return view('pages/news');
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
                return redirect()->to('/references');
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
    public function add_selected_categories()
    {
        $email = $this->input->post('email'); //here i am getting student id from the checkbox

        for ($i = 0; $i < sizeof($email); $i++) {
            $data = array('email' => $email[$i]);
            $this->db->insert('user_preferences', $data);
        }

        $this->session->set_flashdata('msg', "Students details has been added successfully");
        $this->session->set_flashdata('msg_class', 'alert-success');

        return redirect('/user');
    }
    public function insert_preferences()
    {
        $email = $this->input->post('email'); //here i am getting student id from the checkbox

        for ($i = 0; $i < sizeof($email); $i++) {
            $data = array('email' => $email[$i]);
            $this->db->insert('user_preferences', $data);
        }
        return redirect('/user');
    }
}
