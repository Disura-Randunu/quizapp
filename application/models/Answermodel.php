<?php

class Answermodel extends CI_Model
{
    private $table = "answers";
    
    public function __construct()
    {
        parent::__construct();
        $db = $this->load->database();
    }

    public function get_answers_by_question_id($question_id)
    {
        $query =  $this->db->get_where($this->table, array('question_id' => $question_id));
        return $query->result_array();
    }

    public function is_correct_answer($answer_id)
    {
        $query = $this->db->get_where($this->table, array('id' => $answer_id));
        if($query->num_rows() != 1){
            return null;
        } else {
            $row = $query->row();
            return $row->is_correct === "1";
        }
    }

    public function save_answers()
    {

    }
}



        // $query = $this->db->select('*')
        //->from('questions') // ->join('quizzes', 'questions.quiz_id = quizzes.id')
        // $query = $this->db->get();    
        
        
        // $this->db->join('questions', 'questions.quiz_id = quizzes.id');
        // $this->db->where('quiz_id', $quiz_id);
        // $res = $this->db->get("questions");
        // $res = $this->db->where('quiz_id', $quiz_id);
        // var_dump($res);
        