<?php
class Classs{
    private $conn;
    private $sem;
    private $table="class";

    public $id;
    public $timefrom;
    public $timeto;
    public $mon;
    public $tue;
    public $wed;
    public $thu;
    public $fri;
    public $sat;


    public function __construct($conn,$sem) {
        $this->conn = $conn;
        $this->sem = $sem;
    }

    public function getClass(){
        $query = "SELECT * FROM `".$this->table."` WHERE sem= ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->sem);
        $stmt->execute();
        // $insert=mysqli_query($this->conn,$query);
        return $stmt->get_result();
    }
}

?>