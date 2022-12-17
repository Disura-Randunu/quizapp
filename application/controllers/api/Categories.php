<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
// require APPPATH . '/libraries/Format.php';


class Categories extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categorymodel');
        $this->api_key = $this->input->get_request_header('API_KEY', true);
        // $this->methods['quiz_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }
    public function index_get($id = false)
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(create_response(false, 'Access Denied', null), REST_Controller::HTTP_FORBIDDEN);
        }

        $data = null;

        if ($id) {
            $data = $this->Categorymodel->get_category(intval($id));
        } else {
            $data = $this->Categorymodel->get_all_categories();
        }

        $this->set_response(create_response(true, 'All Categories', $data), REST_Controller::HTTP_CREATED);
    }

    public function index_post()
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(create_response(false, 'Access Denied', null), REST_Controller::HTTP_FORBIDDEN);
        }

        $name = $this->post('name');
        $image = $this->post('image') ? $this->post('image') : false;

        $data = $this->Categorymodel->save_category($name, $image);
        $this->set_response(create_response(true, 'Category Created', $data), REST_Controller::HTTP_CREATED);
    }

    public function index_put($id)
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(create_response(false, 'Access Denied', null), REST_Controller::HTTP_FORBIDDEN);
        }

        $name = $this->put('name') ? $this->put('name') : false;
        $image = $this->put('image') ? $this->put('image') : false;
        
        $this->Categorymodel->update_category($id, $name, $image);

        return $this->set_response(create_response(true, 'Category Updated', null), REST_Controller::HTTP_CREATED);
    }

    public function index_delete($id)
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(create_response(false, 'Access Denied', null), REST_Controller::HTTP_FORBIDDEN);
        }

        $this->Categorymodel->delete_category(intval($id));
        $this->set_response(create_response(true, 'Category Deleted', null), REST_Controller::HTTP_OK);
    }
}
