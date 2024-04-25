<?php
class Event{
    private $conn;
    private $table="event";

    public $id;
    public $name;
    public $date;
    public $timefrom;
    public $timeto;
    public $place;
    public $details;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getEvent(){
        $query = "SELECT * FROM `".$this->table."`";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>