<?php
class Student{
    private $conn;
    private $username;
    private $table="student_data";

    public $id;
    public $username1;

    public function __construct($conn,$username) {
        $this->conn = $conn;
        $this->username = $username;
    }

    public function getStudent(){
        $query = "SELECT * FROM `".$this->table."` WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->username);
        $stmt->execute();
        // $insert=mysqli_query($this->conn,$query);
        return $stmt->get_result();
    }

    public function getSemStudent($sem){
        $query = "SELECT * FROM `".$this->table."` WHERE sem =".$sem;
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>