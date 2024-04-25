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
}

?>