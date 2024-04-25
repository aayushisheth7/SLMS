<?php
class Finance{
    private $conn;
    private $table="fee";
    private $username1;

    public $id;
    public $username;
    public $sem;
    public $status;
    public $date;
    public $recept_no;
    public $amount;
    public $link;


    public function __construct($conn,$username) {
        $this->conn = $conn;
        $this->username1 = $username;
    }

    public function getFees(){
        $query = "SELECT * FROM `".$this->table."`WHERE `username` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->username1);
        $stmt->execute();
        // $insert=mysqli_query($this->conn,$query);
        return $stmt->get_result();
    }
}

?>