<?php
class UniversityResults {
    private $conn;
    private $table = "unires";

    public $usename;
    public $sem;
    public $backlog;
    public $spi;
    public $cpi;
    public $cgpa;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Method to retrieve results for a specific user
    public function getResults($usename) {
        $query = "SELECT * FROM `".$this->table."` WHERE usename = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $usename);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    // Method to insert new result
    public function setResults($usename, $sem, $backlog, $spi, $cpi, $cgpa) {
        $query = "INSERT INTO `".$this->table."` (`usename`, `sem`, `backlog`, `spi`, `cpi`, `cgpa`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("siiddd", $usename, $sem, $backlog, $spi, $cpi, $cgpa);
        $result = $stmt->execute();
        return $result;
    }

    // Method to delete a result by id
    public function deleteResults($id) {
        $query = "DELETE FROM `".$this->table."` WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        return $result;
    }
}
?>