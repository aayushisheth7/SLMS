<?php
$server ="localhost";
$username = "root";
$password ="";
$database = "slms";
try {
    $conn = mysqli_connect($server, $username , $password , $database);
} catch (mysqli_sql_exception) {
    echo "Could not connect";
}


?>