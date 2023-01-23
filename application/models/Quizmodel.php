<?php

class Quizmodel extends CI_Model
{

    private $table = "quizzes";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_quizzes($category = false, $search_string = false, $status = false, $user_id = false)
    {
        if ($category) {
            $this->db->where('category', $category);
        }

        if ($status) {
            $this->db->where('status', $status);
        }

        if ($user_id) {
            $this->db->where('user', $user_id);
        }

        if ($search_string) {
            $this->db->like('LOWER(title)', strtolower($search_string));
        }

        $this->db->order_by('id', 'DESC');

        $res = $this->db->get($this->table);
        return $res->result_array();
    }

    public function get_quiz_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_quiz_questions_answers($id)
    {
        $sql = "SELECT questions.id AS 'question_id', questions.description AS 'question_text', answers.id AS 'answer_id', answers.value AS 'answer_text' 
                FROM questions
                JOIN answers
                ON questions.id = answers.question
                WHERE questions.quiz = {$id}";

        $query = $this->db->query($sql, array($id));

        $data = $query->result_array();

        $final_data = array();

        foreach ($data as $item) {

            $new_arr = array('answer_id' => $item['answer_id'], 'answer_text' => $item['answer_text']);

            if (!array_key_exists($item['question_id'], $final_data)) {
                $final_data[$item['question_id']] = array('question_text' => $item['question_text'], 'answers' => array());
            }

            array_push($final_data[$item['question_id']]['answers'], $new_arr);
        }
        return $final_data;
    }

    public function get_latest_quizzes($limit, $status = false)
    {
        if ($status) {
            $this->db->where('status', $status);
        }

        $this->db->order_by('id', 'DESC');

        $this->db->limit($limit);

        $query = $this->db->get($this->table);

        if ($query->num_rows() >= 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function save_quiz($title, $description, $user, $category, $image = false, $questions_amount = false)
    {
        $data = array(
            'code' => uniqid("quiz_"),
            'title' => $title,
            'description' => $description,
            'user' => $user,
            'category' => $category,
            'status' => false
        );

        if ($image) {
            $data['image'] = $image;
        }

        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function get_random_quiz($status = false)
    {
        if ($status) {
            $this->db->where('status', $status);
        }
        $this->db->order_by(null, 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get($this->table);
        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function update_quiz(
        $id,
        $status = false,
        $title = false,
        $description = false,
        $category = false,
        $image = false
    ) {
        if ($status || !$status) {
            $this->db->set('status', $status);
        }
        if ($title) {
            $this->db->set('title', $title);
        }
        if ($description) {
            $this->db->set('description', $description);
        }
        if ($category) {
            $this->db->set('category', $category);
        }
        if ($image) {
            $this->db->set('image', $image);
        }
        $this->db->where('id', $id);
        $this->db->update($this->table);
    }

    public function delete_quiz($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    public function publish_quiz($id)
    {
        $this->db->set('status', true);
        $this->db->where('id', $id);
        $this->db->update($this->table);
    }

    public function get_quiz_results($id, $questions_answers)
    {
        $sql = "SELECT questions.id AS 'question', answers.id AS 'answer'
                FROM questions
                JOIN answers
                ON questions.id = answers.question
                WHERE questions.quiz = ? AND answers.is_correct = 1";

        $query_data = $this->db->query($sql, array($id))->result_array();
        $questions_count = count($query_data);

        $correct_answers = 0;

        foreach ($questions_answers as $question => $answer) {
            $valid_answer_key = array_search($question, array_column($query_data, 'question'));
            if ($answer === $query_data[$valid_answer_key]['answer']) {
                $correct_answers++;
            }
        }
        $percentage = round(($correct_answers * 100) / $questions_count, 2);
        $message = null;

        if ($percentage >= 75) {
            $message = 'Excellent!';
        } elseif ($percentage >= 50) {
            $message = 'Meh..!';
        } else {
            $message = 'Better Luck Next Time!';
        }

        return array(
            'score' => $correct_answers . '/' . $questions_count,
            'message' =>  $message,
            'percentage' => $percentage,
        );
    }
}
