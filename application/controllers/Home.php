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
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('home', array('latest_quizzes' => $this->Quizmodel->get_latest_quizzes(6, true)));
        $this->load->view('footer');
    }

}
