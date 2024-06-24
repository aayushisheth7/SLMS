<?php
class Module{
    private $conn;
    private $table="module";

    public $id;
    public $sem;
    public $name;
    public $type;
    public $detail;
    public $link;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getModule($sem){
        $query = "SELECT * FROM `".$this->table."` WHERE sem =".$sem;
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }

    public function setModule($sem,$name,$type,$link,$detail){
        // INSERT INTO `module`(`id`, `sem`, `name`, `type`, `detail`, `link`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
        $query = "INSERT INTO `".$this->table."` (`sem`, `name`,`type`, `detail`,`link`) VALUES ('$sem','$name','$type','$detail','$link')";
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }

    public function deeleteModule($id){
        // DELETE FROM `module` WHERE id = id
        $query = "DELETE FROM `".$this->table."` WHERE id =".$id;
        $insert=mysqli_query($this->conn,$query);
        return $insert;
    }
}

?>