<?php
class Faculty{
    private $conn;
    private $username;
    private $table="faculty_reg";

    public $id;
    public $username1;

    public function __construct($conn,$username) {
        $this->conn = $conn;
        $this->username = $username;
    }

    public function getIDFaculty($id){
        $query = "SELECT * FROM `".$this->table."` WHERE id = ".$id;
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }

    public function getPositionStudent($position){
        $query = "SELECT * FROM `".$this->table."` WHERE position = '$position' ";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>