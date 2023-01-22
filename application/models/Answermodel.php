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
        if ($query->num_rows() != 1) {
            return null;
        } else {
            $row = $query->row();
            return $row->is_correct === "1";
        }
    }

    public function save_answers_for_question($question_id, $answers)
    {
        $data = array();

        foreach ($answers as $index => $answer) {
            array_push($data, array(
                'code' => uniqid('answer_'),
                'value' => $answer['text'],
                'is_correct' => $answer['is_correct'],
                'question' => $question_id
            ));
        }

        $this->db->insert_batch($this->table, $data);
    }
}