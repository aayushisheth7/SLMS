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

    public function addNews($news){
        // INSERT INTO `news`(`id`, `news`) VALUES ('[value-1]','[value-2]')
        $query = "INSERT INTO `".$this->table."` (`news`) VALUES ('$news')";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>