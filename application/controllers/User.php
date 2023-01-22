<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usermodel");
        $this->load->model('Rolemodel');
    }

    public function login()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function submit_login()
    {
        if ($this->Usermodel->login($this->input->post('username'), $this->input->post('password'))) {
            redirect('/');
        } else {
            redirect('/user/login');
        }
    }

    public function signup()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('signup');
        $this->load->view('footer');
    }

    public function submit_signup()
    {
        if ($this->Usermodel->signup(
            $this->input->post('email'),
            $this->input->post('username'),
            $this->input->post('password'),
            $this->Rolemodel->get_role_by_code('GENERAL_USER')->id
        )) {
            redirect('/');
        } else {
            redirect('/user/signup');
        }
    }

    public function logout()
    {
        if (!$this->session->is_logged_in) {
            return redirect('user/login');
        }

        $this->Usermodel->logout();
        return redirect('/');
    }

    public function dashboard()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }
}
