CREATE TABLE StudentPortal (
  studentID varchar(255) NOT NULL,
  studentName varchar(255) NOT NULL,
  grade varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  primary key (studentID)
);

INSERT into StudentPortal(studentID, studentName, grade, email)
VALUES
('20055405', 'Barkirat Singh Brar', '21', 'barkiratbrar88@gmail.com'),
('64536', 'Barkirat Singh Brar', '100', 'barkiratbrar88@gmail.com'),
('123456', 'Barkirat Singh Brar', '21', 'barkiratbrar88@gmail.com'),
