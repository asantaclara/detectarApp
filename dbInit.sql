insert into health_condition_types (id, name) values (1,'A');
insert into health_condition_types (id, name) values (2,'B');
insert into health_condition_types (id, name) values (3,'C');

insert into health_conditions(id, health_condition_type_id, healthy, name) values (1, 1, 1, "A.Sano");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (2, 1, 0, "A.A");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (3, 1, 0, "A.B");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (4, 2, 1, "B.Sano");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (5, 2, 0, "B.A");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (6, 2, 0, "B.B");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (7, 3, 1, "C.Sano");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (8, 3, 0, "C.A");
insert into health_conditions(id, health_condition_type_id, healthy, name) values (9, 3, 0, "C.B");

INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(1, 5, 9, 'Pregunta para chico A, 1 sano, 2 A.A, 3 A.B', '', 'question_types.three_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(2, 5, 9, 'Pregunta para chico A, 1 sano, 2 A.B', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(3, 5, 9, 'Pregunta para chico A 1 sano, 2 A.A', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(4, 5, 9, 'Pregunta para chico A <50% Sano, >50% A.A y A.B', '', '', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(5, 5, 9, 'Pregunta para chico B 1 sano, 2 B.A, 3 B.B', '', 'question_types.three_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(6, 5, 9, 'Pregunta para chico B, 1 sano, 2 B.B', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(7, 5, 9, 'Pregunta para chico B 1 sano, 2 B.A', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(8, 5, 9, 'Pregunta para chico B. <50% Sano, >50% B.A y B.B', '', '', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(9, 5, 9, 'Pregunta para chico C 1 sano, 2 C.A, 3 C.B', '', 'question_types.three_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(10, 5, 9, 'Pregunta para chico C, 1 sano, 2 C.B', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(11, 5, 9, 'Pregunta para chico C 1 sano, 2 C.A', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(12, 5, 9, 'Pregunta para chico C <50% Sano, >50% C.A y C.B', '', '', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(13, 10, 15, 'Pregunta para grande A, 1 sano, 2 A.A, 3 A.B', '', 'question_types.three_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(14, 10, 15, 'Pregunta para grande A, 1 sano, 2 A.B', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(15, 10, 15, 'Pregunta para grande A 1 sano, 2 A.A', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(16, 10, 15, 'Pregunta para grande A <50% Sano, >50% A.A y A.B', '', '', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(17, 10, 15, 'Pregunta para grande B 1 sano, 2 B.A, 3 B.B', '', 'question_types.three_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(18, 10, 15, 'Pregunta para grande B, 1 sano, 2 B.B', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(19, 10, 15, 'Pregunta para grande B 1 sano, 2 B.A', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(20, 10, 15, 'Pregunta para grande B. <50% Sano, >50% B.A y B.B', '', '', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(21, 10, 15, 'Pregunta para grande C 1 sano, 2 C.A, 3 C.B', '', 'question_types.three_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(22, 10, 15, 'Pregunta para grande C, 1 sano, 2 C.B', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(23, 10, 15, 'Pregunta para grande C 1 sano, 2 C.A', '', 'question_types.two_options', '2021-08-18 01:25:10', '2021-08-18 01:25:10');
INSERT INTO detectar.test_questions
(id, min_age, max_age, `text`, img_path, view_path, created_at, updated_at)
VALUES(24, 10, 15, 'Pregunta para grande C <50% Sano, >50% C.A y C.B', '', '', '2021-08-18 01:25:10', '2021-08-18 01:25:10');

INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(1, 1, 1, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(2, 1, 2, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(3, 1, 3, '3', '3', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(4, 2, 1, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(5, 2, 3, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(6, 3, 1, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(7, 3, 2, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(8, 4, 1, '0', '49', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(9, 4, 2, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(10, 4, 3, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(11, 5, 4, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(12, 5, 5, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(13, 5, 6, '3', '3', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(14, 6, 4, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(15, 6, 6, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(16, 7, 4, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(17, 7, 5, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(18, 8, 4, '0', '49', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(19, 8, 5, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(20, 8, 6, '75', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(21, 9, 7, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(22, 9, 8, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(23, 9, 9, '3', '3', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(24, 10, 7, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(25, 10, 9, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(26, 11, 7, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(27, 11, 8, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(28, 12, 7, '0', '49', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(29, 12, 8, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(30, 12, 9, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(31, 13, 1, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(32, 13, 2, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(33, 13, 3, '3', '3', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(34, 14, 1, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(35, 14, 3, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(36, 15, 1, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(37, 15, 2, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(38, 16, 1, '0', '49', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(39, 16, 2, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(40, 16, 3, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(41, 17, 4, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(42, 17, 5, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(43, 17, 6, '3', '3', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(44, 18, 4, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(45, 18, 6, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(46, 19, 4, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(47, 19, 5, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(48, 20, 4, '0', '49', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(49, 20, 5, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(50, 20, 6, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(51, 21, 7, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(52, 21, 8, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(53, 21, 9, '3', '3', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(54, 22, 7, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(55, 22, 9, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(56, 23, 7, '1', '1', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(57, 23, 8, '2', '2', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(58, 24, 7, '0', '49', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(59, 24, 8, '50', '100', NULL, NULL);
INSERT INTO detectar.question_possible_answers
(id, test_question_id, health_condition_id, min_value, max_value, created_at, updated_at)
VALUES(60, 24, 9, '50', '100', NULL, NULL);