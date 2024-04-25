<?php
class Test{
    private $conn;
    private $table="test";

    public $id;
    public $name;
    public $sub;
    public $date;
    public $total;
    public $marks;
    public $link;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getTest(){
        $query = "SELECT * FROM `".$this->table."`";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>