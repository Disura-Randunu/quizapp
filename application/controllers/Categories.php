<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Categorymodel");
        $this->load->model("Quizmodel");
    }

    public function index($category_id = false)
    {
        $this->load->view('head', array('page_title' => 'Category Quizzes'));
        $this->load->view('nav');
        if ($category_id) {
            $this->load->view('category_quizzes', array(
                'category' => $this->Categorymodel->get_category($category_id),
                'quizzes' => $this->Quizmodel->get_all_quizzes($category_id, false, true)
            ));
        } else {
            $this->load->view('categories', array('categories' => $this->Categorymodel->get_all_categories()));
        }

        $this->load->view('footer');
    }
}
