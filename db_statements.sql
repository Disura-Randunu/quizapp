CREATE DATABASE `quizapp_dev`;

USE DATABASE `quizapp_dev`;

CREATE TABLE `quizapp_dev`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(20) NOT NULL ,
    `email` VARCHAR(50) NOT NULL , 
    `password` VARCHAR(100) NOT NULL , 
    CONSTRAINT PK_User PRIMARY KEY (`id`)
);

CREATE TABLE `quizapp_dev`.`categories` (
    `id` INT NOT NULL, 
    `name` VARCHAR(50) NOT NULL, 
    CONSTRAINT PK_Category PRIMARY KEY (`id`)
);

CREATE TABLE `quizapp_dev`.`quizzes` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `title` VARCHAR(255) NOT NULL , 
    `description` VARCHAR(300) NOT NULL , 
    `questions_amount` INT NOT NULL,
    `user_id` INT NOT NULL,
    `category_id` INT NOT NULL,
    CONSTRAINT PK_Quiz PRIMARY KEY (`id`),
    CONSTRAINT FK_QuizUser FOREIGN KEY (`user_id`) REFERENCES users(`id`),
    CONSTRAINT FK_QuizCategory FOREIGN KEY (`category_id`) REFERENCES categories(`id`)
);

CREATE TABLE `quizapp_dev`.`questions` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `description` VARCHAR(500) NOT NULL , 
    `quiz_id` INT NOT NULL , 
    CONSTRAINT PK_Question PRIMARY KEY (`id`),
    CONSTRAINT FK_QuestionQuiz FOREIGN KEY (`quiz_id`) REFERENCES quizzes(`id`)
);

CREATE TABLE `quizapp_dev`.`answers` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `value` VARCHAR(300) NOT NULL , 
    `is_correct` BOOLEAN NOT NULL , 
    `question_id` INT NOT NULL , 
    CONSTRAINT PK_Answer PRIMARY KEY (`id`),
    CONSTRAINT FK_AnswerQuestion FOREIGN KEY (`question_id`) REFERENCES answers(`id`)
);

INSERT INTO `categories`(`name`)
VALUES('Sports'),('Entertainment'),('Gaming'),('Science'),('Technology'),('Miscellaneous');

INSERT INTO `quizzes` (`id`, `title`, `description`, `questions_amount`, `user_id`, `category_id`) VALUES (NULL, 'Gaming Test 1', 'Ddkskfjskd fkdgsj ksdjgsdkg', '3', '1', '3')
-- CREATE TABLE `quizapp_dev`.`quizzes` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(300) NOT NULL , `questions_amount` INT NOT NULL , `user_id` INT NOT NULL , `category_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
-- ALTER TABLE `quizzes` ADD CONSTRAINT `FK_QuizUser` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;