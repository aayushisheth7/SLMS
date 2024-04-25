<?php
class Module{
    private $conn;
    private $table="module";

    public $id;
    public $name;
    public $type;
    public $detail;
    public $link;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getModule(){
        $query = "SELECT * FROM `".$this->table."`";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>