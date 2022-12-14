<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
// require APPPATH . '/libraries/Format.php';


class Answers extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("Answermodel");
        
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function index_get()
    {
        $answers = $this->Answermodel->get_answers_by_question_id(intval($this->get('question')));
        // $quiz_id = $this->uri->segment(4);
        // var_dump($answers);
        if ($answers) {
            $this->response([
                'status' => TRUE, 
                'message' => "All Answers For Questions",
                'data' => $answers
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No Answers Found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }

    }

}
