<?php

class Quizmodel extends CI_Model
{

    private $table = "quizzes";
    
    public function __construct()
    {
        parent::__construct();
        $db = $this->load->database();
    }

    public function get_all_quizzes()
    {
        $res = $this->db->get($this->table);
        return $res->result_array();
    }

    public function get_quiz_by_id($id)
    {
        $res = $this->db->where('id', $id);
        if ($res->num_rows() != 1) {
            return false;
        } else {
            return $res->row();
        }
    }

    public function get_latest_quizzes($limit)
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get($this->table);

        if ($query->num_rows() < 1) {
            return false;
        } else {
            return $query->result_array();
        }

    }

    public function save_quiz($title, $description, $username, $category_code)
    {
        $code = uniqid($username . "_");
        $data = array(
            'code' => $code,
            'title' => $title,
            'description' => $description,
            'username' => $username,
            'category_code' => $category_code,
            'status' => false
        );

        $this->db->insert($this->table, $data);
        return $code;
    }

    public function publish_quiz($quiz_id)
    {
        // status - true
        $this->db->set('status', true);
        $this->db->where('id', $quiz_id);
        $this->db->update($this->table);
    }

    public function evaluate_quiz($quiz_code, $questions_answers)
    {
        $sql = "SELECT questions.code AS 'question_code', answers.code AS 'answer_code'
                FROM questions
                JOIN answers
                ON questions.code = answers.question_code
                WHERE questions.quiz_code = ? AND answers.is_correct = 1";

        $query_data = $this->db->query($sql, array($quiz_code))->result_array();
        $questions_count = count($query_data);

        $correct_answers = 0;

        foreach ($questions_answers as $question => $answer) {
            $valid_answer_key = array_search($question, array_column($query_data, 'question_code'));
            if ($answer === $query_data[$valid_answer_key]['answer_code']){
                $correct_answers++;
            }
        }

        return array(
            'correct_answers' => $correct_answers, 
            'percentage' => round(($correct_answers * 100) / $questions_count, 2), 
            'questions_count' => $questions_count
        );
    }
}




        // $this->db->select('questions.id', 'answers.id', 'answers.is_correct');
        // $this->db->from('questions');
        // $this->db->join('answers', 'questions.id = answers.question_id');
        // $this->db->where('questions.quiz_id', $quiz_id);
        // $this->db->where('answers.is_correct', 1);
        // $query = $this->db->get();



  // SELECT Customers.CustomerName, Orders.OrderID
        // FROM Customers
        // LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
        // ORDER BY Customers.CustomerName;