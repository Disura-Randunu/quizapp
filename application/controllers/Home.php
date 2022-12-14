<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        // log_message('error', "testing errror log");
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('home');
        $this->load->view('footer');
    }

}
