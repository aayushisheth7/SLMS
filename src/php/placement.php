<?php
class Placement{
    private $conn;
    private $table="placement";

    public $id;
    public $name;
    public $detail;
    public $view;
    public $apply;
    

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getPlacement(){
        $query = "SELECT * FROM `".$this->table."`";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }

    public function addPlacement($name,$detail,$view,$apply){
        // INSERT INTO `placement`(`id`, `name`, `detail`, `view`, `apply`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
        $query = "INSERT INTO `".$this->table."` (`name`, `detail`, `view`, `apply`) VALUES ('$name','$detail','$view','$apply') ";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>