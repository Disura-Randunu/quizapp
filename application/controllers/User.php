<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usermodel");
    }

    public function login()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('login');
        $this->load->view('footer');

        // if ($this->Usermodel->login("disu", "123")) {
        //     echo 'OK';
        //     echo print_r($_SESSION);
        // } else {
        //     echo 'FAILED';
        // }
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
        if ($this->Usermodel->signup($this->input->post('email'), $this->input->post('username'), $this->input->post('password'))) {
            redirect('/');
        } else {
            redirect('/user/signup');
        }
    }

    public function logout()
    {
        $this->Usermodel->logout();
    }

    
}
