<?php

class Database {

    private $connection;

    public function __construct() {
        $this->connect_db();
    }

    public function connect_db() {
        $this->connection = mysqli_connect('localhost', 'root', '', 'Assignment1');
        if (mysqli_connect_error()) {
            die("Database Connection Failed" . mysqli_connect_error());
        }
    }

    public function create($studentID, $studentName, $grade, $email) {
        $sql = "INSERT INTO StudentPortal (studentID, studentName, grade, email) VALUES ('$studentID', '$studentName', '$grade', '$email')";
        $res = mysqli_query($this->connection, $sql);
        return ($res) ? true : false;
    }

    public function read() {
        $sql = "SELECT * FROM StudentPortal";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }

}

$database = new Database();

?>