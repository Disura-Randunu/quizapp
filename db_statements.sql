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



-- NEW STATEMENTS AFTER DESIGN --
-- Q&A FOREIGN KEY CONSTRAINT?
ALTER TABLE `users` ADD UNIQUE(`username`);

ALTER TABLE `quizzes` ADD `status` BOOLEAN NOT NULL AFTER `category_id`;
ALTER TABLE `quizzes` ADD `code` VARCHAR(255) NOT NULL AFTER `id`;
ALTER TABLE `quizzes` ADD UNIQUE(`code`)

ALTER TABLE `categories` ADD `code` VARCHAR(255) NOT NULL AFTER `id`;
ALTER TABLE `categories` ADD UNIQUE(`code`)

ALTER TABLE `questions` ADD `code` VARCHAR(255) NOT NULL AFTER `id`;
ALTER TABLE `questions` ADD UNIQUE(`code`)

ALTER TABLE `answers` ADD `code` VARCHAR(255) NOT NULL AFTER `id`;
ALTER TABLE `answers` ADD UNIQUE(`code`);

ALTER TABLE `quizzes` DROP INDEX `FK_QuizUser`;
ALTER TABLE `quizzes` DROP INDEX `FK_QuizCategory`;
ALTER TABLE quizapp_dev.quizzes DROP FOREIGN KEY FK_QuizUser;
ALTER TABLE quizapp_dev.quizzes DROP FOREIGN KEY FK_QuizCategory

ALTER TABLE `quizzes` CHANGE `user_id` `username` VARCHAR(255) NOT NULL;
ALTER TABLE `quizzes` CHANGE `category_id` `category_code` VARCHAR(255) NOT NULL;

ALTER TABLE `quizzes` ADD CONSTRAINT `FK_QuizUser` FOREIGN KEY (`username`) REFERENCES `users`(`username`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `quizzes` ADD CONSTRAINT `FK_QuizCategory` FOREIGN KEY (`category_code`) REFERENCES `categories`(`code`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `questions` DROP INDEX `FK_QuestionQuiz`;
ALTER TABLE quizapp_dev.questions DROP FOREIGN KEY FK_QuestionQuiz;
ALTER TABLE `questions` CHANGE `quiz_id` `quiz_code` VARCHAR(255) NOT NULL;
ALTER TABLE `questions` ADD CONSTRAINT `FK_QuestionQuiz` FOREIGN KEY (`quiz_code`) REFERENCES `quizzes`(`code`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `answers` DROP INDEX `FK_AnswerQuestion`;
ALTER TABLE quizapp_dev.answers DROP FOREIGN KEY FK_AnswerQuestion
ALTER TABLE `answers` CHANGE `question_id` `question_code` VARCHAR(255) NOT NULL;
ALTER TABLE `answers` ADD CONSTRAINT `FK_AnswerQuestion` FOREIGN KEY (`question_code`) REFERENCES `questions`(`code`) ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `categories` ( `code`, `name`) VALUES ('CAT_1', 'Gaming'), ('CAT_2', 'Technology')

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);

ALTER TABLE `categories` ADD `image` VARCHAR(500) NOT NULL AFTER `name`;

CREATE TABLE `quizapp_dev`.`roles` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `code` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`))

ALTER TABLE `users` ADD `role_code` VARCHAR(50) NOT NULL AFTER `password`;
ALTER TABLE `users` ADD CONSTRAINT `FK_UserRole` FOREIGN KEY (`role_code`) REFERENCES `roles`(`code`) ON DELETE NO ACTION ON UPDATE CASCADE;


INSERT INTO `roles` (`name`, `code`) VALUES ('Admin User', 'ADMIN'), ('General User', 'GENERAL_USER')
INSERT INTO `users` (`username`, `email`, `password`, `role_code`) VALUES ('admin', 'disuru.2018008@iit.ac.lk', '123', 'ADMIN');

ALTER TABLE `quizzes` ADD `image` VARCHAR(500) NULL AFTER `description`;



---- Refactored SQL (Run Below Statements in a fresh DB) ----

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE IF NOT EXISTS `roles` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL ,
    `code` VARCHAR(255) NOT NULL ,
    CONSTRAINT PK_Role PRIMARY KEY (`id`),
    CONSTRAINT UQ_Role UNIQUE (`code`)
);

INSERT INTO `roles` (`name`, `code`) 
VALUES  ('Admin', 'ADMIN'),
        ('General User', 'GENERAL_USER');

CREATE TABLE IF NOT EXISTS `users`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(255) NOT NULL,
    `username` VARCHAR(100) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `role` INT NULL,
    CONSTRAINT PK_User PRIMARY KEY(`id`),
    CONSTRAINT UQ_User UNIQUE(`username`),
    CONSTRAINT FK_UserRole FOREIGN KEY(`role`) REFERENCES `roles`(`id`) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `categories`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `code` VARCHAR(255) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `image` VARCHAR(255) NULL,
    CONSTRAINT PK_Category PRIMARY KEY(`id`),
    CONSTRAINT UQ_Category UNIQUE(`code`)
);

CREATE TABLE IF NOT EXISTS `quizzes` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `code` VARCHAR(255) NOT NULL ,
    `title` VARCHAR(255) NOT NULL ,
    `description` VARCHAR(300) NOT NULL ,
    `image` VARCHAR(255) NULL ,
    `questions_amount` INT NULL ,
    `user` INT NOT NULL ,
    `category` INT NULL ,
    `status` BOOLEAN NOT NULL ,
    CONSTRAINT PK_Quiz PRIMARY KEY (`id`),
    CONSTRAINT UQ_Quiz UNIQUE (`code`),
    CONSTRAINT FK_QuizUser FOREIGN KEY (`user`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_QuizCategory FOREIGN KEY (`category`) REFERENCES `categories`(`id`) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `questions` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `code` VARCHAR(255) NOT NULL ,
    `description` VARCHAR(255) NOT NULL ,
    `quiz` INT NOT NULL ,
    CONSTRAINT PK_Question PRIMARY KEY (`id`),
    CONSTRAINT UQ_Question UNIQUE (`code`),
    CONSTRAINT FK_QuestionQuiz FOREIGN KEY (`quiz`) REFERENCES `quizzes`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `answers` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `code` VARCHAR(255) NOT NULL ,
    `value` VARCHAR(255) NOT NULL ,
    `is_correct` BOOLEAN NOT NULL ,
    `question` INT NOT NULL ,
    CONSTRAINT PK_Answer PRIMARY KEY (`id`),
    CONSTRAINT UQ_Answer UNIQUE (`code`),
    CONSTRAINT FK_AnswerQuestion FOREIGN KEY (`question`) REFERENCES `questions`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE `quizzes` CHANGE `image` `image` VARCHAR(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

ALTER TABLE `categories` CHANGE `image` `image` VARCHAR(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

INSERT INTO `categories`(`code`, `name`, `image`)
VALUES(
    'category_1', 
    'Science', 
    'https://images.unsplash.com/photo-1534777410147-084a460870fc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
),(
    'category_2',
    'Technology',
    'https://images.unsplash.com/photo-1589254065878-42c9da997008?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
),(
    'category_3',
    'Gaming',
    'https://images.unsplash.com/photo-1552875102-1638873599fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
),(
    'category_4',
    'Entertainment',
    'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80'
),(
    'category_5',
    'Miscellaneous',
    'https://images.unsplash.com/photo-1523961131990-5ea7c61b2107?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80'
);








