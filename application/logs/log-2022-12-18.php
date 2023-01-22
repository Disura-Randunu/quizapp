<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2022-12-18 07:14:41 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:14:41 --> No URI present. Default controller set.
DEBUG - 2022-12-18 07:14:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:14:41 --> Total execution time: 0.0403
DEBUG - 2022-12-18 07:14:43 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:14:43 --> Total execution time: 0.0377
DEBUG - 2022-12-18 07:14:51 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:14:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 07:14:51 --> Query error: Unknown column 'questions.text' in 'field list' - Invalid query: SELECT questions.text AS 'quiz_id', questions.id AS 'question_id', answers.id AS 'answer_id', quizzes.title AS 'quiz_title', questions.description AS 'question_text', answers.value AS 'answer_text' 
                FROM quizzes
                JOIN questions
                ON quizzes.id = questions.quiz
                JOIN answers
                ON questions.id = answers.question
                WHERE quizzes.id = 1
                GROUP BY questions.id
DEBUG - 2022-12-18 07:15:45 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:15:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 07:15:45 --> Query error: Unknown column 'questions.text' in 'field list' - Invalid query: SELECT questions.text AS 'quiz_id', questions.id AS 'question_id', answers.id AS 'answer_id', quizzes.title AS 'quiz_title', questions.description AS 'question_text', answers.value AS 'answer_text' 
                FROM quizzes
                JOIN questions
                ON quizzes.id = questions.quiz
                JOIN answers
                ON questions.id = answers.question
                WHERE quizzes.id = 1
                GROUP BY questions.id
DEBUG - 2022-12-18 07:16:23 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:16:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 07:16:23 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\quizapp\application\controllers\Quizzes.php 33
DEBUG - 2022-12-18 07:16:23 --> Total execution time: 0.0475
DEBUG - 2022-12-18 07:16:45 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:16:45 --> Total execution time: 0.0504
DEBUG - 2022-12-18 07:20:31 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:20:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:20:31 --> Total execution time: 0.0411
DEBUG - 2022-12-18 07:22:24 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:22:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:22:24 --> Total execution time: 0.0370
DEBUG - 2022-12-18 07:22:56 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:22:56 --> Total execution time: 0.0547
DEBUG - 2022-12-18 07:24:02 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:24:03 --> Total execution time: 0.0491
DEBUG - 2022-12-18 07:26:58 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:26:58 --> Total execution time: 0.0389
DEBUG - 2022-12-18 07:27:23 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:27:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:27:24 --> Total execution time: 0.0492
DEBUG - 2022-12-18 07:29:02 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:29:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:29:02 --> Total execution time: 0.0405
DEBUG - 2022-12-18 07:30:12 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 07:30:12 --> Query error: Unknown column 'questions.id' in 'field list' - Invalid query: SELECT questions.id AS 'question_id', questions.description AS 'question_text', answers.id AS 'answer_id', answers.value AS 'answer_text' 
                FROM questions
                FULL JOIN answers
                ON questions.id = answers.question
                WHERE questions.quiz = 1
                GROUP BY questions.id, questions.description
DEBUG - 2022-12-18 07:30:42 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:30:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 07:30:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OUTER JOIN answers
                ON questions.id = answers.question
     ...' at line 3 - Invalid query: SELECT questions.id AS 'question_id', questions.description AS 'question_text', answers.id AS 'answer_id', answers.value AS 'answer_text' 
                FROM questions
                FULL OUTER JOIN answers
                ON questions.id = answers.question
                WHERE questions.quiz = 1
                GROUP BY questions.id, questions.description
DEBUG - 2022-12-18 07:30:57 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:30:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 07:30:57 --> Query error: Unknown column 'questions.id' in 'field list' - Invalid query: SELECT questions.id AS 'question_id', questions.description AS 'question_text', answers.id AS 'answer_id', answers.value AS 'answer_text' 
                FROM questions
                FULL JOIN answers
                ON questions.id = answers.question
                WHERE questions.quiz = 1
                GROUP BY questions.id, questions.description
DEBUG - 2022-12-18 07:31:22 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:31:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 07:31:22 --> Query error: Unknown column 'questions.id' in 'field list' - Invalid query: SELECT questions.id AS 'question_id', questions.description AS 'question_text', answers.id AS 'answer_id', answers.value AS 'answer_text' 
                FROM questions
                FULL JOIN answers
                ON questions.id = answers.question
                WHERE questions.quiz = 1
                GROUP BY questions.id
DEBUG - 2022-12-18 07:33:39 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:33:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:33:39 --> Total execution time: 0.0454
DEBUG - 2022-12-18 07:34:00 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:34:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:34:00 --> Total execution time: 0.0511
DEBUG - 2022-12-18 07:34:21 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:34:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:34:21 --> Total execution time: 0.0236
DEBUG - 2022-12-18 07:35:23 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:35:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:35:23 --> Total execution time: 0.0563
DEBUG - 2022-12-18 07:39:51 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:39:51 --> Total execution time: 0.0382
DEBUG - 2022-12-18 07:40:23 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:40:23 --> Total execution time: 0.0356
DEBUG - 2022-12-18 07:41:55 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 07:41:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 07:41:55 --> Total execution time: 0.0443
DEBUG - 2022-12-18 08:15:16 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 08:15:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 08:15:16 --> Severity: Notice --> Trying to get property 'question_id' of non-object C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 58
ERROR - 2022-12-18 08:15:16 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 58
ERROR - 2022-12-18 08:15:16 --> Severity: error --> Exception: Call to a member function array_push() on null C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 58
DEBUG - 2022-12-18 08:15:45 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 08:15:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 08:15:45 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 58
ERROR - 2022-12-18 08:15:45 --> Severity: error --> Exception: Call to a member function array_push() on null C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 58
DEBUG - 2022-12-18 08:17:08 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 08:17:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 08:17:08 --> Severity: Notice --> Trying to get property 'question_id' of non-object C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 57
ERROR - 2022-12-18 08:17:08 --> Severity: Notice --> Trying to get property 'question_id' of non-object C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 57
ERROR - 2022-12-18 08:17:08 --> Severity: Notice --> Trying to get property 'question_id' of non-object C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 57
DEBUG - 2022-12-18 08:17:08 --> Total execution time: 0.0506
DEBUG - 2022-12-18 08:17:24 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 08:17:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 08:17:24 --> Severity: error --> Exception: Call to a member function array_push() on array C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 58
DEBUG - 2022-12-18 08:21:43 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 08:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 08:21:43 --> Total execution time: 0.0554
DEBUG - 2022-12-18 08:22:11 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 08:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 08:22:11 --> Total execution time: 0.0354
DEBUG - 2022-12-18 09:18:00 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:18:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:18:00 --> Severity: Warning --> Illegal string offset 'answer_text' C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 67
ERROR - 2022-12-18 09:18:00 --> Severity: Warning --> Illegal string offset 'answer_id' C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 66
ERROR - 2022-12-18 09:18:00 --> Severity: Warning --> Illegal string offset 'answer_text' C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 67
ERROR - 2022-12-18 09:18:00 --> Severity: Warning --> Illegal string offset 'answer_id' C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 66
ERROR - 2022-12-18 09:18:00 --> Severity: Warning --> Illegal string offset 'answer_text' C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 67
DEBUG - 2022-12-18 09:18:00 --> Total execution time: 0.0241
DEBUG - 2022-12-18 09:19:23 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:19:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:19:23 --> Severity: Warning --> Illegal string offset 'answer_id' C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 66
ERROR - 2022-12-18 09:19:23 --> Severity: Warning --> Illegal string offset 'answer_id' C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 66
DEBUG - 2022-12-18 09:19:23 --> Total execution time: 0.0294
DEBUG - 2022-12-18 09:26:37 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:26:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:26:37 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 68
ERROR - 2022-12-18 09:26:37 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 68
ERROR - 2022-12-18 09:26:37 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 68
DEBUG - 2022-12-18 09:26:37 --> Total execution time: 0.0366
DEBUG - 2022-12-18 09:28:37 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:28:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:28:37 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 87
DEBUG - 2022-12-18 09:28:55 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:28:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:28:55 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
ERROR - 2022-12-18 09:28:55 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
ERROR - 2022-12-18 09:28:55 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
DEBUG - 2022-12-18 09:28:55 --> Total execution time: 0.0303
DEBUG - 2022-12-18 09:29:27 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:29:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:29:27 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
ERROR - 2022-12-18 09:29:27 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
ERROR - 2022-12-18 09:29:27 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
DEBUG - 2022-12-18 09:29:27 --> Total execution time: 0.0404
DEBUG - 2022-12-18 09:29:28 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:29:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:29:28 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
ERROR - 2022-12-18 09:29:28 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
ERROR - 2022-12-18 09:29:28 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 63
DEBUG - 2022-12-18 09:29:28 --> Total execution time: 0.0311
DEBUG - 2022-12-18 09:30:13 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:30:13 --> Total execution time: 0.0413
DEBUG - 2022-12-18 09:31:51 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:31:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:31:51 --> Total execution time: 0.0362
DEBUG - 2022-12-18 09:33:19 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:33:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:33:20 --> Total execution time: 0.0436
DEBUG - 2022-12-18 09:34:50 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:34:50 --> Total execution time: 0.0412
DEBUG - 2022-12-18 09:35:04 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:35:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:35:04 --> Total execution time: 0.0349
DEBUG - 2022-12-18 09:46:30 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:46:30 --> Total execution time: 0.0345
DEBUG - 2022-12-18 09:48:29 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:48:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:48:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 70
ERROR - 2022-12-18 09:48:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 70
ERROR - 2022-12-18 09:48:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 70
DEBUG - 2022-12-18 09:48:29 --> Total execution time: 0.0410
DEBUG - 2022-12-18 09:48:51 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:48:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:48:51 --> Total execution time: 0.0370
DEBUG - 2022-12-18 09:49:59 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:49:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 09:49:59 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 70
ERROR - 2022-12-18 09:49:59 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 70
ERROR - 2022-12-18 09:49:59 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 70
DEBUG - 2022-12-18 09:49:59 --> Total execution time: 0.0406
DEBUG - 2022-12-18 09:51:46 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:51:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:51:46 --> Total execution time: 0.0427
DEBUG - 2022-12-18 09:52:32 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:52:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:52:32 --> Total execution time: 0.0300
DEBUG - 2022-12-18 09:53:16 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:53:16 --> Total execution time: 0.0295
DEBUG - 2022-12-18 09:53:18 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 09:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 09:53:18 --> Total execution time: 0.0339
DEBUG - 2022-12-18 10:02:25 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:02:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:02:25 --> Total execution time: 0.0232
DEBUG - 2022-12-18 10:03:14 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:03:14 --> Total execution time: 0.0418
DEBUG - 2022-12-18 10:03:42 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:03:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:03:42 --> Total execution time: 0.0298
DEBUG - 2022-12-18 10:07:49 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:07:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:07:49 --> Total execution time: 0.0457
DEBUG - 2022-12-18 10:08:22 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:08:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:08:22 --> Total execution time: 0.0420
DEBUG - 2022-12-18 10:18:49 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:18:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Undefined variable: category C:\xampp\htdocs\quizapp\application\views\start_quiz.php 28
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\quizapp\application\views\start_quiz.php 28
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Undefined variable: category C:\xampp\htdocs\quizapp\application\views\start_quiz.php 29
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\quizapp\application\views\start_quiz.php 29
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Undefined variable: category C:\xampp\htdocs\quizapp\application\views\start_quiz.php 28
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\quizapp\application\views\start_quiz.php 28
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Undefined variable: category C:\xampp\htdocs\quizapp\application\views\start_quiz.php 29
ERROR - 2022-12-18 10:18:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\quizapp\application\views\start_quiz.php 29
DEBUG - 2022-12-18 10:18:49 --> Total execution time: 0.0523
DEBUG - 2022-12-18 10:19:16 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:19:16 --> Total execution time: 0.0352
DEBUG - 2022-12-18 10:19:35 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:19:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:19:35 --> Total execution time: 0.0359
DEBUG - 2022-12-18 10:21:38 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:21:38 --> Total execution time: 0.0329
DEBUG - 2022-12-18 10:22:19 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:22:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:22:19 --> Total execution time: 0.0411
DEBUG - 2022-12-18 10:23:00 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:23:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:23:00 --> Total execution time: 0.0383
DEBUG - 2022-12-18 10:28:25 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:28:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:28:25 --> Total execution time: 0.0255
DEBUG - 2022-12-18 10:29:02 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:29:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:29:02 --> Total execution time: 0.0440
DEBUG - 2022-12-18 10:29:05 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:29:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 10:29:05 --> Severity: error --> Exception: Too few arguments to function Quizzes::submit_quiz_answers(), 0 passed in C:\xampp\htdocs\quizapp\system\core\CodeIgniter.php on line 533 and exactly 1 expected C:\xampp\htdocs\quizapp\application\controllers\Quizzes.php 43
DEBUG - 2022-12-18 10:29:19 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:29:19 --> Total execution time: 0.0355
DEBUG - 2022-12-18 10:30:13 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:30:13 --> Total execution time: 0.0363
DEBUG - 2022-12-18 10:30:16 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:30:16 --> Total execution time: 0.0305
DEBUG - 2022-12-18 10:30:22 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:30:23 --> Total execution time: 0.0428
DEBUG - 2022-12-18 10:30:30 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:30:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:30:30 --> Total execution time: 0.0429
DEBUG - 2022-12-18 10:34:12 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:34:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:34:12 --> Total execution time: 0.0238
DEBUG - 2022-12-18 10:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:34:49 --> Total execution time: 0.0311
DEBUG - 2022-12-18 10:34:52 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:34:52 --> Total execution time: 0.0395
DEBUG - 2022-12-18 10:35:51 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:35:51 --> Total execution time: 0.0377
DEBUG - 2022-12-18 10:35:52 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:35:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:35:52 --> Total execution time: 0.0426
DEBUG - 2022-12-18 10:35:54 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:35:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:35:54 --> Total execution time: 0.0427
DEBUG - 2022-12-18 10:35:56 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:35:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:35:56 --> Total execution time: 0.0408
DEBUG - 2022-12-18 10:36:27 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:36:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:36:27 --> Total execution time: 0.0283
DEBUG - 2022-12-18 10:36:27 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:36:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:36:27 --> Total execution time: 0.0275
DEBUG - 2022-12-18 10:36:30 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:36:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:36:30 --> Total execution time: 0.0397
DEBUG - 2022-12-18 10:38:00 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:38:00 --> Total execution time: 0.0403
DEBUG - 2022-12-18 10:39:14 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:39:14 --> Total execution time: 0.0462
DEBUG - 2022-12-18 10:39:15 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:39:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:39:15 --> Total execution time: 0.0297
DEBUG - 2022-12-18 10:58:46 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:58:46 --> Total execution time: 0.0220
DEBUG - 2022-12-18 10:58:47 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:58:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:58:47 --> Total execution time: 0.0403
DEBUG - 2022-12-18 10:59:07 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:59:07 --> Total execution time: 0.0291
DEBUG - 2022-12-18 10:59:09 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 10:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 10:59:09 --> Total execution time: 0.0281
DEBUG - 2022-12-18 11:00:30 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:00:30 --> Total execution time: 0.0199
DEBUG - 2022-12-18 11:00:30 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:00:30 --> Total execution time: 0.0376
DEBUG - 2022-12-18 11:00:32 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:00:32 --> Total execution time: 0.0395
DEBUG - 2022-12-18 11:00:51 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:00:51 --> Total execution time: 0.0195
DEBUG - 2022-12-18 11:00:52 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:00:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:00:52 --> Total execution time: 0.0377
DEBUG - 2022-12-18 11:00:54 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:00:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:00:54 --> Total execution time: 0.0377
DEBUG - 2022-12-18 11:00:57 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:00:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:00:57 --> Total execution time: 0.0426
DEBUG - 2022-12-18 11:05:00 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:05:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:05:00 --> Total execution time: 0.0358
DEBUG - 2022-12-18 11:05:02 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:05:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:05:02 --> Severity: error --> Exception: Call to undefined method Quizmodel::get_quiz_results() C:\xampp\htdocs\quizapp\application\controllers\Quizzes.php 45
DEBUG - 2022-12-18 11:05:15 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:05:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:05:15 --> Total execution time: 0.0397
DEBUG - 2022-12-18 11:05:16 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:05:16 --> Total execution time: 0.0430
DEBUG - 2022-12-18 11:05:19 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:05:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:05:19 --> Severity: Notice --> Undefined index: answer_code C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 194
ERROR - 2022-12-18 11:05:19 --> Severity: Notice --> Undefined index: answer_code C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 194
ERROR - 2022-12-18 11:05:19 --> Severity: Notice --> Undefined index: answer_code C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 194
ERROR - 2022-12-18 11:05:19 --> Severity: Notice --> Undefined index: answer_code C:\xampp\htdocs\quizapp\application\models\Quizmodel.php 194
ERROR - 2022-12-18 11:05:19 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_result.php 5
ERROR - 2022-12-18 11:05:19 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_result.php 5
ERROR - 2022-12-18 11:05:19 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 9
ERROR - 2022-12-18 11:05:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 9
DEBUG - 2022-12-18 11:05:19 --> Total execution time: 0.0449
DEBUG - 2022-12-18 11:06:24 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:06:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:06:24 --> Total execution time: 0.0374
DEBUG - 2022-12-18 11:06:25 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:06:25 --> Total execution time: 0.0391
DEBUG - 2022-12-18 11:06:27 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:06:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:06:28 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_result.php 5
ERROR - 2022-12-18 11:06:28 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_result.php 5
ERROR - 2022-12-18 11:06:28 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 9
ERROR - 2022-12-18 11:06:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 9
DEBUG - 2022-12-18 11:06:28 --> Total execution time: 0.0365
DEBUG - 2022-12-18 11:06:33 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:06:33 --> Total execution time: 0.0428
DEBUG - 2022-12-18 11:06:36 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:06:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:06:36 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_result.php 5
ERROR - 2022-12-18 11:06:36 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_result.php 5
ERROR - 2022-12-18 11:06:36 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 9
ERROR - 2022-12-18 11:06:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 9
DEBUG - 2022-12-18 11:06:36 --> Total execution time: 0.0369
DEBUG - 2022-12-18 11:26:40 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:26:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:26:40 --> Total execution time: 0.0385
DEBUG - 2022-12-18 11:26:41 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:26:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:26:41 --> Total execution time: 0.0377
DEBUG - 2022-12-18 11:26:42 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:26:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:26:42 --> Total execution time: 0.0464
DEBUG - 2022-12-18 11:26:43 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:26:43 --> Total execution time: 0.0342
DEBUG - 2022-12-18 11:26:46 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:26:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:26:46 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:26:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:26:46 --> Total execution time: 0.0327
DEBUG - 2022-12-18 11:27:23 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:27:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:27:23 --> Total execution time: 0.0438
DEBUG - 2022-12-18 11:27:26 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:27:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:27:26 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:27:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:27:26 --> Total execution time: 0.0306
DEBUG - 2022-12-18 11:28:21 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:28:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:28:21 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:28:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:28:21 --> Total execution time: 0.0403
DEBUG - 2022-12-18 11:28:30 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:28:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:28:30 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:28:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:28:30 --> Total execution time: 0.0303
DEBUG - 2022-12-18 11:29:00 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:29:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:29:00 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:29:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:29:00 --> Total execution time: 0.0346
DEBUG - 2022-12-18 11:29:14 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:29:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:29:14 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:29:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:29:14 --> Total execution time: 0.0430
DEBUG - 2022-12-18 11:29:48 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:29:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:29:48 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:29:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:29:48 --> Total execution time: 0.0371
DEBUG - 2022-12-18 11:30:12 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:30:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:30:12 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:30:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:30:12 --> Total execution time: 0.0440
DEBUG - 2022-12-18 11:30:33 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:30:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:30:33 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:30:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:30:33 --> Total execution time: 0.0463
DEBUG - 2022-12-18 11:30:53 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:30:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:30:53 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:30:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:30:53 --> Total execution time: 0.0427
DEBUG - 2022-12-18 11:31:42 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:31:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:31:42 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:31:42 --> Total execution time: 0.0408
DEBUG - 2022-12-18 11:31:46 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:31:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:31:46 --> Total execution time: 0.0327
DEBUG - 2022-12-18 11:31:48 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:31:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:31:48 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:31:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:31:48 --> Total execution time: 0.0416
DEBUG - 2022-12-18 11:31:50 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:31:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:31:50 --> Total execution time: 0.0395
DEBUG - 2022-12-18 11:31:52 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:31:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-12-18 11:31:52 --> Total execution time: 0.0395
DEBUG - 2022-12-18 11:31:53 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 11:31:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 11:31:53 --> Severity: Notice --> Undefined variable: latest_quizzes C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
ERROR - 2022-12-18 11:31:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_result.php 43
DEBUG - 2022-12-18 11:31:53 --> Total execution time: 0.0320
DEBUG - 2022-12-18 13:44:29 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:44:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:44:29 --> 404 Page Not Found: Category/index
DEBUG - 2022-12-18 13:44:35 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:44:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:44:36 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:44:36 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:44:36 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:44:36 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:44:36 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:44:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:44:36 --> Total execution time: 0.2946
DEBUG - 2022-12-18 13:49:55 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:49:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:49:55 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:49:55 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:49:55 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:49:55 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:49:55 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:49:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:49:55 --> Total execution time: 0.0260
DEBUG - 2022-12-18 13:50:27 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:50:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:50:27 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:50:27 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:50:27 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:50:27 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:50:27 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:50:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:50:27 --> Total execution time: 0.0301
DEBUG - 2022-12-18 13:50:28 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:50:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:50:29 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:50:29 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:50:29 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:50:29 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:50:29 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:50:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:50:29 --> Total execution time: 0.0462
DEBUG - 2022-12-18 13:51:31 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:51:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:51:31 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:31 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:31 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:31 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:31 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:51:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:51:31 --> Total execution time: 0.0445
DEBUG - 2022-12-18 13:51:36 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:51:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:51:36 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:36 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:36 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:36 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:36 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:51:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:51:36 --> Total execution time: 0.0449
DEBUG - 2022-12-18 13:51:37 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:51:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:51:37 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:37 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:37 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:37 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:37 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:51:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:51:37 --> Total execution time: 0.0194
DEBUG - 2022-12-18 13:51:49 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:51:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:51:49 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:49 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:51:49 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:49 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:51:49 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:51:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:51:49 --> Total execution time: 0.0390
DEBUG - 2022-12-18 13:52:04 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:52:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:52:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:52:04 --> Total execution time: 0.0410
DEBUG - 2022-12-18 13:52:04 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:52:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:04 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:52:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:52:04 --> Total execution time: 0.0433
DEBUG - 2022-12-18 13:52:21 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:52:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:52:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:52:22 --> Total execution time: 0.0379
DEBUG - 2022-12-18 13:52:22 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:52:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:22 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:52:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:52:22 --> Total execution time: 0.0359
DEBUG - 2022-12-18 13:52:56 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:52:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:52:56 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:56 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:52:56 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:56 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:52:56 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:52:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:52:56 --> Total execution time: 0.0450
DEBUG - 2022-12-18 13:53:50 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:53:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:53:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:53:50 --> Total execution time: 0.0344
DEBUG - 2022-12-18 13:53:50 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:53:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:53:50 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:53:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:53:50 --> Total execution time: 0.0440
DEBUG - 2022-12-18 13:54:04 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:54:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:54:04 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:04 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:04 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:04 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:04 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:54:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:54:04 --> Total execution time: 0.0411
DEBUG - 2022-12-18 13:54:13 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:54:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:54:13 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:13 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:13 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:13 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:13 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:54:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:54:13 --> Total execution time: 0.0340
DEBUG - 2022-12-18 13:54:14 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:54:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:54:14 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:14 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:14 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:14 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:14 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:54:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:54:14 --> Total execution time: 0.0368
DEBUG - 2022-12-18 13:54:26 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:54:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:54:26 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:26 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:26 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:26 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:26 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:54:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:54:26 --> Total execution time: 0.0404
DEBUG - 2022-12-18 13:54:27 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 13:54:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 13:54:27 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:27 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 13:54:27 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:27 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 10
ERROR - 2022-12-18 13:54:27 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
ERROR - 2022-12-18 13:54:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 11
DEBUG - 2022-12-18 13:54:27 --> Total execution time: 0.0366
DEBUG - 2022-12-18 16:46:14 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:46:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:46:14 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:46:14 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:46:14 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 45
ERROR - 2022-12-18 16:46:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 45
DEBUG - 2022-12-18 16:46:14 --> Total execution time: 0.1296
DEBUG - 2022-12-18 16:46:23 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:46:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:46:23 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:46:23 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:46:23 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 45
ERROR - 2022-12-18 16:46:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 45
DEBUG - 2022-12-18 16:46:23 --> Total execution time: 0.0563
DEBUG - 2022-12-18 16:51:37 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:51:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:51:37 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:51:37 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:51:37 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
ERROR - 2022-12-18 16:51:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
DEBUG - 2022-12-18 16:51:37 --> Total execution time: 0.0406
DEBUG - 2022-12-18 16:51:41 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:51:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:51:41 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:51:41 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:51:41 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
ERROR - 2022-12-18 16:51:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
DEBUG - 2022-12-18 16:51:41 --> Total execution time: 0.0491
DEBUG - 2022-12-18 16:52:53 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:52:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:52:53 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:52:53 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:52:53 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
ERROR - 2022-12-18 16:52:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
DEBUG - 2022-12-18 16:52:53 --> Total execution time: 0.0463
DEBUG - 2022-12-18 16:52:55 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:52:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:52:55 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:52:55 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:52:55 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
ERROR - 2022-12-18 16:52:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 46
DEBUG - 2022-12-18 16:52:55 --> Total execution time: 0.0428
DEBUG - 2022-12-18 16:54:22 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:54:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:54:22 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:54:22 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:54:22 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 51
ERROR - 2022-12-18 16:54:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 51
DEBUG - 2022-12-18 16:54:22 --> Total execution time: 0.0594
DEBUG - 2022-12-18 16:54:24 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:54:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:54:24 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:54:24 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:54:24 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 51
ERROR - 2022-12-18 16:54:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 51
DEBUG - 2022-12-18 16:54:24 --> Total execution time: 0.0459
DEBUG - 2022-12-18 16:55:01 --> UTF-8 Support Enabled
DEBUG - 2022-12-18 16:55:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-12-18 16:55:02 --> Severity: Notice --> Undefined variable: quiz C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:55:02 --> Severity: Notice --> Trying to get property 'title' of non-object C:\xampp\htdocs\quizapp\application\views\quiz_create.php 5
ERROR - 2022-12-18 16:55:02 --> Severity: Notice --> Undefined variable: questions_answers C:\xampp\htdocs\quizapp\application\views\quiz_create.php 53
ERROR - 2022-12-18 16:55:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\quizapp\application\views\quiz_create.php 53
DEBUG - 2022-12-18 16:55:02 --> Total execution time: 0.0618
