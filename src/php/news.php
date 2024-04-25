<?php
class News{
    private $conn;
    private $table="news";

    public $id;
    public $news;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getNews(){
        $query = "SELECT * FROM `".$this->table."`";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>