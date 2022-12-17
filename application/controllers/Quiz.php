<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Quiz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Quizmodel");
        $this->load->model("Categorymodel");
    }
    
    public function index($code = false)
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('quizzes', array(
            'quizzes' => $this->Quizmodel->get_all_quizzes(),
            'categories' => $this->Categorymodel->get_all_categories()
        ));
        $this->load->view('footer');
    }

    public function initialize()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('create_quiz');
        $this->load->view('footer');
    }

    public function create_questions()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('create_quiz');
        $this->load->view('footer');
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
