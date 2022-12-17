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

        $this->methods['quiz_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function index_get($code = false)
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(create_response(false, 'Access Denied', null), REST_Controller::HTTP_FORBIDDEN);
        }

        $category = $this->input->get('category');
        $title = $this->input->get('title');

        $data = null;

        if ($code) {
            $data = $this->Quizmodel->get_quiz_by_id($code);
        } else {
            $data = $this->Quizmodel->get_all_quizzes(
                $category ? $category : false,
                $title ? $title : false
            );
        }

        $this->set_response(create_response(true, 'Quizzes', $data), REST_Controller::HTTP_OK);


        // if (validate_request($this->api_key)) {
        //     $res = create_response(true, 'All Quizzes', $quizzes);
        //     $http_status = REST_Controller::HTTP_OK;
        // } else {
        //     $res = create_response(false, 'Access Denied', null);
        //     $http_status = REST_Controller::HTTP_FORBIDDEN;
        // }


        // $quiz_id = $this->uri->segment(4);

        // if ($quizzes) {
        //     $this->response([
        //         'status' => TRUE,
        //         'message' => "All Quizzes",
        //         'data' => $quizzes
        //     ], REST_Controller::HTTP_OK);
        // } else {
        //     $this->response([
        //         'status' => FALSE,
        //         'message' => 'No Quizzes Found'
        //     ], REST_Controller::HTTP_NOT_FOUND);
        // }
    }

    public function index_post()
    {
        if (!validate_request($this->api_key)) {
            return $this->set_response(
                create_response(false, 'Access Denied', null),
                REST_Controller::HTTP_FORBIDDEN
            );
        }

        $user = $this->Usermodel->get_user_by_username($this->post('username'));

        if (!$user) {
            return $this->set_response(
                create_response(false, 'Invalid Username', null),
                REST_Controller::HTTP_NOT_FOUND
            );
        }

        $title = $this->post('title');
        $description = $this->post('description');
        $category = $this->post('category');

        $data = $this->Quizmodel->save_quiz($title, $description, $user->id, $category);


        $this->set_response(create_response(true, 'Quiz Initialized And Saved', $data), REST_Controller::HTTP_CREATED);
    }

    public function latest_get()
    {
        $res = null;
        $http_status = null;

        if (validate_request($this->api_key)) {
            $data = $this->Quizmodel->get_latest_quizzes(intval($this->get('limit')));
            $res = create_response(true, 'Latest Quizzes', $data);
            $http_status = REST_Controller::HTTP_OK;
        } else {
            $res = create_response(false, 'Auth Failed', null);
            $http_status = REST_Controller::HTTP_FORBIDDEN;
        }

        $this->set_response((array) $res, $http_status);
    }

    // public function filtered_get()
    // {

    //     $res = null;
    //     $http_status = null;

    //     if (validate_request($this->api_key)) {
    //         $data = $this->Quizmodel->get_latest_quizzes(intval($this->get('limit')));
    //         $res = create_response(true, 'Latest Quizzes', $data);
    //         $http_status = REST_Controller::HTTP_OK;
    //     } else {
    //         $res = create_response(false, 'Auth Failed', null);
    //         $http_status = REST_Controller::HTTP_FORBIDDEN;
    //     }

    //     $this->set_response((array) $res, $http_status);
    // }

    public function questions_answers_post($quiz_code)
    {
        $questions_data = array();

        $answers = array();

        // $questions_data->array_push(array(
        //     'code' => $
        //     'description' => $description,
        //     'quiz_code' => $quiz_code,
        // ));

        // {
        //     1: {
        //         question: "gdgdgddhdh gsdgd?",
        //         answers: {
        //             {
        //                 value: "cyberpunk",
        //                 is_correct: 1
        //             },
        //             {
        //                 value: "GTA",
        //                 is_correct: 0
        //             }
        //         }
        //     },
        //     2: {
        //         question: "gdgdgddhdh gsdgd?",
        //         answers: {
        //             {
        //                 value: "val 1",
        //                 is_correct: 0
        //             },
        //             {
        //                 value: "val 2",
        //                 is_correct: 1
        //             }
        //         }
        //     }
        // }
    }


    public function publish_put($quiz_id)
    {
        // create general update method
        $this->Quizmodel->publish_quiz($quiz_id);

        $message = [
            'status' => true, // Automatically generated by the model
            'messaeg' => "Quiz Published",
            'data' => null
        ];

        $this->set_response($message, REST_Controller::HTTP_NO_CONTENT);
    }

    public function evaluate_post($quiz_code)
    {
        // check quiz and questions validity
        // check answers and questions validity
        $correct = 0;

        $question_answers = $this->post('question_answers');

        $results = $this->Questionmodel->evaluate_quiz($quiz_code, $question_answers);

        // $valid_answers = $this->Quizmodel->get_quiz_questions_answers($quiz_id);



        // $questions_for_quiz = $this->Questionmodel->get_questions_by_quiz_id($quiz_id);

        // $answers_for_question = $this->Answermodel->get_answers_by_question_id($question_id);


        // foreach ($question_answers as $question => $answer) {
        //     $valid_answer_key = array_search($question, array_column($valid_answers, 'q_id'));
        //     if ($answer === $valid_answers[$valid_answer_key]['a_id']){
        //         $correct++;
        //     }
        // }

        $message = [
            'status' => TRUE, // Automatically generated by the model
            'message' => 'Quiz Evaluated',
            'data' => $results
        ];

        $this->set_response($message, REST_Controller::HTTP_OK);
    }

    public function users_delete()
    {
        $id = (int) $this->get('id');

        // Validate the id.
        if ($id <= 0) {
            // Set the response and exit
            $this->response(NULL, \Restserver\Libraries\REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // $this->some_model->delete_something($id);
        $message = [
            'id' => $id,
            'message' => 'Deleted the resource'
        ];

        $this->set_response($message, \Restserver\Libraries\REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
    }
}
