-- UWAGA: ZAMIEN 'NUMER_ALBUMU' NA SWÓJ PRAWDZIWY NUMER!
CREATE DATABASE IF NOT EXISTS `89413`;
USE `NUMER_ALBUMU`;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL
);

INSERT INTO students (name, email) VALUES
('Jan Kowalski', 'jan.kowalski@example.com'),
('Anna Nowak', 'anna.nowak@example.com'),
('Daniel Student', 'daniel.student@example.com');
