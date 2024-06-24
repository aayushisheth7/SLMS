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

    public function addAnnouncement($announcement){
        // INSERT INTO `announcement`(`id`, `announcement`) VALUES ('[value-1]','[value-2]')
        $query = "INSERT INTO `".$this->table."` (`announcement`) VALUES ('$announcement') ";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>