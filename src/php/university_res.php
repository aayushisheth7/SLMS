<?php
class UniversityResults {
    private $conn;
    private $table = "unires";

    public $username;
    public $sem;
    public $backlog;
    public $spi;
    public $cpi;
    public $cgpa;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Method to retrieve results for a specific user
    public function getResults($username) {
        $query = "SELECT * FROM `".$this->table."` WHERE username = '$username' ORDER BY `unires`.`sem` ASC";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }

    // Method to insert new result
    public function setResults($username, $sem, $backlog, $spi, $cpi, $cgpa) {
        $query = "INSERT INTO `".$this->table."` (`username`, `sem`, `backlog`, `spi`, `cpi`, `cgpa`) VALUES ('$username', '$sem', '$backlog', '$spi', '$cpi', '$cgpa')";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }

    // Method to delete a result by id
    public function deleteResults($id) {
        $query = "DELETE FROM `".$this->table."` WHERE id = ".$id;
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}
?>