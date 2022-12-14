<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
// require APPPATH . '/libraries/Format.php';


class Questions extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("Questionmodel");
        
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function index_get()
    {
        $questions = $this->Questionmodel->get_questions_by_quiz_id(intval($this->get('quiz')));
        // $quiz_id = $this->uri->segment(4);
        
        if ($questions) {
            $this->response([
                'status' => TRUE, 
                'message' => "All Question For Quiz",
                'data' => $questions
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No Questions Found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }

    }

}
