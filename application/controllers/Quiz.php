<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Quiz extends CI_Controller
{
    public function index()
    {
        
    }

    public function all()
    {
        // log_message('error', "testing errror log");
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('all_quizzes');
        $this->load->view('footer');
    }

    public function start($quiz_code)
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('start_quiz');
        $this->load->view('footer');
    }

}
