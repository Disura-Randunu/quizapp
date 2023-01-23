<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
// require APPPATH . '/libraries/Format.php';


class Quizzes extends REST_Controller
{
    private $api_key;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Quizmodel");
        $this->load->model("Questionmodel");
        $this->load->model("Answermodel");
        $this->load->model('Usermodel');

        $this->api_key = $this->input->get_request_header('API_KEY', true);
    }

    public function index_post()
    {
        if (!validate_request($this->input->get_request_header('API_KEY', true)) || !validate_jwt(get_cookie('jwt_token'))) {
            return $this->set_response(null, REST_Controller::HTTP_FORBIDDEN);
        }

        $user = $this->Usermodel->get_user_by_username($this->post('username'));

        if (!$user) {
            return $this->set_response(null, REST_Controller::HTTP_NOT_FOUND);
        }

        $title = $this->post('title');
        $description = $this->post('description');
        $category = $this->post('category');
        $image = $this->post('image');

        $this->Quizmodel->save_quiz($title, $description, $user->id, $category, $image);

        return $this->set_response(null, REST_Controller::HTTP_CREATED);
    }

    public function index_get($id = false)
    {

        if (!validate_request($this->input->get_request_header('API_KEY', true)) || !validate_jwt(get_cookie('jwt_token'))) {
            return $this->set_response(null, REST_Controller::HTTP_FORBIDDEN);
        }

        $category = $this->get('category');
        $title = $this->get('title');
        $username = $this->get('username');
        $status = $this->get('status');

        $data = null;

        if ($id) {
            $data = $this->Quizmodel->get_quiz_by_id($id);
        } else {
            $data = $this->Quizmodel->get_all_quizzes(
                $category ? $category : false,
                $title ? $title : false,
                $status ? $status : false,
                $username ? $this->Usermodel->get_user_by_username($username)->id : false
            );
        }

        return $this->set_response($data, REST_Controller::HTTP_OK);
    }

    public function index_put($id)
    {
        if (!validate_request($this->input->get_request_header('API_KEY', true)) || !validate_jwt(get_cookie('jwt_token'))) {
            return $this->set_response(null, REST_Controller::HTTP_FORBIDDEN);
        }
        
        $this->Quizmodel->update_quiz($id, $this->put("status"));
        return $this->set_response(null, REST_Controller::HTTP_NO_CONTENT);
    }

    public function index_delete($id)
    {
        if (!validate_request($this->input->get_request_header('API_KEY', true)) || !validate_jwt(get_cookie('jwt_token'))) {
            return $this->set_response(null, REST_Controller::HTTP_FORBIDDEN);
        }

        $this->Quizmodel->delete_quiz($id);
        return $this->set_response(null, REST_Controller::HTTP_NO_CONTENT);
    }

    public function questions_answers_post($quiz_id)
    {
        if (!validate_request($this->input->get_request_header('API_KEY', true)) || !validate_jwt(get_cookie('jwt_token'))) {
            return $this->set_response(null, REST_Controller::HTTP_FORBIDDEN);
        }

        $question_text = $this->post('question');
        $answers = $this->post('answers');
        $question_id = $this->Questionmodel->save_question_for_quiz($quiz_id, $question_text);
        $this->Answermodel->save_answers_for_question($question_id, $answers);

        return $this->set_response(null, REST_Controller::HTTP_CREATED);
    }
}
