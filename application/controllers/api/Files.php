<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
// require APPPATH . '/libraries/Format.php';


class Files extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Filemodel');

        $this->api_key = $this->input->get_request_header('API_KEY', true);

        // $this->methods['quiz_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function index_post($entity = false)
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(create_response(false, 'Access Denied', null), REST_Controller::HTTP_FORBIDDEN);
        }

        $data = $this->Filemodel->save_file($entity ? $entity : 'other');
        return $this->set_response(create_response(true, 'File Uploaded', $data), REST_Controller::HTTP_OK);
    }
}
