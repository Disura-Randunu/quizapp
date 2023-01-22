<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
// require APPPATH . '/libraries/Format.php';


class Questions extends REST_Controller
{
    private $api_key;
    
    function __construct()
    {
        parent::__construct();
        $this->load->model("Questionmodel");
        
        $this->api_key = $this->input->get_request_header('API_KEY', true);

    }

    public function index_get($id = false)
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(null, REST_Controller::HTTP_FORBIDDEN);
        }

        $quiz_id = $this->get('quiz_id');

        $data = null;

        if ($id) {
            $data = $this->Questionmodel->get_questions($id);
        } else {
            $data = $this->Questionmodel->get_questions($quiz_id ? $quiz_id : false);
        }

        return $this->set_response($data, REST_Controller::HTTP_OK);
    }

    public function index_delete($id)
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(null, REST_Controller::HTTP_FORBIDDEN);
        }

        $this->Questionmodel->delete_question($id);
        return $this->set_response(null, REST_Controller::HTTP_NO_CONTENT);
    }
}
