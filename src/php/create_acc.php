<?php 
include('dbconnect.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ins="INSERT INTO `login`(`username`, `pass`) VALUES ('$username','$password')";
    if(mysqli_query($conn,$ins)){
        header('Location: ../../signup.html');
    }else{
        header('Location: ../../create_acc.html');
    }
}
 mysqli_close($conn);


?>