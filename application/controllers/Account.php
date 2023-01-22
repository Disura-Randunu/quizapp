<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Quizmodel");
        $this->load->model("Categorymodel");
        $this->load->model('Usermodel');
    }

    public function quizzes()
    {
        if (!$this->session->is_logged_in) {
            return redirect('user/login');
        } else {
            $this->load->view('head');
            $this->load->view('nav');
            $this->load->view('account_quizzes', array(
                'categories' => $this->Categorymodel->get_all_categories()
            ));
            $this->load->view('footer');
        }
    }

    public function quiz_edit($id)
    {
        if (!$this->session->is_logged_in) {
            return redirect('user/login');
        } else {
            $this->load->view('head');
            $this->load->view('nav');
            $this->load->view('account_quiz_edit', array(
                'quiz_id' => $id,
                'quiz' => $this->Quizmodel->get_quiz_by_id($id),
                'categories' => $this->Categorymodel->get_all_categories()
            ));
            $this->load->view('footer');
        }
    }
}
