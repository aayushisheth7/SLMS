<?php
class Announcement{
    private $conn;
    private $table="announcement";

    public $id;
    public $announcement;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAnnouncement(){
        $query = "SELECT * FROM `".$this->table."`";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>