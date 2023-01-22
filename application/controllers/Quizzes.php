<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Quizzes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Quizmodel");
        $this->load->model("Categorymodel");
        $this->load->model('Usermodel');
    }

    public function index($id = false)
    {
        $this->load->view('head');
        $this->load->view('nav');
        if ($id) {
            $quiz = $this->Quizmodel->get_quiz_by_id($id);
            $user = $this->Usermodel->get_user_by_id($quiz->user);
            $this->load->view('quiz', array(
                'quiz' => $quiz,
                'username' => $user->username
            ));
        } else {
            $this->load->view('quizzes', array(
                'quizzes' => $this->Quizmodel->get_all_quizzes(false, false, true),
                'categories' => $this->Categorymodel->get_all_categories()
            ));
        }
        $this->load->view('footer');
    }

    public function filter()
    {
        $category = $this->input->get('category') ? $this->input->get('category') : false;
        $search_string = $this->input->get('search_string') ? $this->input->get('search_string') : false;

        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('quizzes', array(
            'quizzes' => $this->Quizmodel->get_all_quizzes($category === "all" ? false : $category, $search_string),
            'categories' => $this->Categorymodel->get_all_categories(),
            'selected_category' => $category,
            'entered_search_string' => $search_string,
        ));

        $this->load->view('footer');
    }

    public function start($id)
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('quiz_start', array(
            'quiz' => $this->Quizmodel->get_quiz_by_id($id),
            'questions_answers' => $this->Quizmodel->get_quiz_questions_answers($id),
        ));
        $this->load->view('footer');
    }

    public function submit_quiz_answers($id)
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('quiz_result', array(
            'quiz' => $this->Quizmodel->get_quiz_by_id($id),
            'results' => $this->Quizmodel->get_quiz_results($id, $this->input->post())
        ));
        $this->load->view('footer');
    }

    public function create()
    {
        if (!$this->session->is_logged_in) {
            return redirect('user/login');
        } else {
            $this->load->view('head');
            $this->load->view('nav');
            $this->load->view('quiz_create', array(
                'categories' => $this->Categorymodel->get_all_categories()
            ));
            $this->load->view('footer');
        }
    }

    public function edit()
    {
        if (!$this->session->is_logged_in) {
            return redirect('user/login');
        } else {
            $this->load->view('head');
            $this->load->view('nav');
            $this->load->view('quiz_edit', array(
                'categories' => $this->Categorymodel->get_all_categories()
            ));
            $this->load->view('footer');
        }
    }

    public function random()
    {
        $random_quiz = $this->Quizmodel->get_random_quiz(true);
        return redirect("/quizzes/{$random_quiz->id}");
    }
}
