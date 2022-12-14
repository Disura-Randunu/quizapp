<?php

class Questionmodel extends CI_Model
{
    private $table = "questions";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_questions_for_quiz($quiz_id)
    {
        $query =  $this->db->get_where($this->table, array('quiz_id' => $quiz_id));
        return $query->result();
    }

    public function save_questions_for_quiz($quiz_code, $questions)
    {
        // {
        //     1: {
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

        $questions_data = array();

        $questions_data->array_push(array(
            'description' => $description,
            'quiz_code' => $quiz_code,
        ));
        
            
        $this->db->insert_batch($this->table, $question_data);
    }

    public function evaulate_results($quiz_id, $question_answers)
    {
        // $sql = "SELECT questions.id AS 'question_id', answers.id AS 'answer_id'
        //         FROM questions
        //         JOIN answers
        //         ON questions.id = answers.question_id
        //         WHERE questions.quiz_id = ? AND answers.is_correct = 1";

        // $query_data = $this->db->query($sql, array($quiz_id))->result_array();

        // $correct_answers = 0;

        // foreach ($question_answers as $question => $answer) {
        //     $valid_answer_key = array_search($question, array_column($query_data, 'question_id'));
        //     if ($answer === $query_data[$valid_answer_key]['answer_id']){
        //         $correct_answers++;
        //     }
        // }

        // 'data' => [
        //     'correct_count' => $correct,
        //     'percentage' => round(($correct * 100) / count($valid_answers), 2),
        //     'questions_count' => count($query_data)
        // ]    
        // return $query->result_array();
    }


    /**
     * @param array<array{description: string, quiz_id: int}> $question_data
     */
    public function save_questions($question_data)
    {
        // $data = array(
        //     'description' => $description,
        //     'quiz_id' => $quiz_id,
        // );
            
        $this->db->insert('mytable', $question_data);
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