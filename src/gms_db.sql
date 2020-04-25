

DROP DATABASE IF EXISTS gms_db;
CREATE DATABASE gms_db;
USE gms_db;

-- TABLE admins
CREATE TABLE admins(
    admin_name VARCHAR(100) NOT NULL UNIQUE,
    admin_pass VARCHAR(100) NOT NULL
);

-- TABLE tutors
CREATE TABLE tutors(
    tutor_id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tutor_name VARCHAR(100) NOT NULL UNIQUE,
    tutor_pass VARCHAR(100) NOT NULL
);

-- TABLE students
CREATE TABLE students(
    student_id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    student_name VARCHAR(100) NOT NULL UNIQUE ,
    student_pass VARCHAR(100) NOT NULL
);

CREATE TABLE classes(
    class_id INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tutor_id INT(5) ,
    student_id INT(5) ,
    start_date VARCHAR(20),
    start_time VARCHAR(20),
    end_date VARCHAR(20),
    end_time VARCHAR(20),
    CONSTRAINT FK_tutor_id FOREIGN KEY (tutor_id) REFERENCES tutors(tutor_id) ON DELETE SET NULL ,
    CONSTRAINT FK_student_id FOREIGN KEY (student_id) REFERENCES  students(student_id) ON DELETE SET NULL
);

INSERT INTO tutors(tutor_id, tutor_name, tutor_pass) VALUES (1,'haris','haris');
INSERT INTO students(student_id, student_name, student_pass) VALUES (1,'haris','haris');
INSERT INTO classes(tutor_id, student_id, start_date, start_time, end_date, end_time) VALUES (1,1,'2020-04-25', '18:00', '2020-04-25', '19:00');


