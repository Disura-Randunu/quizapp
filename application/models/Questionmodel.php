<?php

class Questionmodel extends CI_Model
{
    private $table = "questions";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_question_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    
    public function get_questions($quiz_id = false)
    {
        if ($quiz_id) {
            $this->db->where('quiz', $quiz_id);
        }
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function delete_question($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    public function get_questions_for_quiz($quiz_id)
    {
        $query =  $this->db->get_where($this->table, array('quiz_id' => $quiz_id));
        return $query->result();
    }

    public function save_question_for_quiz($quiz_id, $question_text)
    {
        $data = array(
            'code' => uniqid('question_'),
            'description' => $question_text,
            'quiz' => $quiz_id,
        );
            
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}