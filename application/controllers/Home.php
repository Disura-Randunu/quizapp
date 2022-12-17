<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Quizmodel");
    }

    public function index()
    {
        // log_message('error', "testing errror log");
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('home', array('latest_quizzes' => $this->Quizmodel->get_latest_quizzes(5)));
        $this->load->view('footer');
    }

}
