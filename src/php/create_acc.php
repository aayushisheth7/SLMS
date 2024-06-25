<?php 
include('dbconnect.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashpass=password_hash($password,PASSWORD_DEFAULT);
    $role="student";
    $ins="INSERT INTO `login`(`username`, `pass`, `role`) VALUES ('$username','$hashpass','$role')";
    if(mysqli_query($conn,$ins)){
        header('Location: ../../signup.html');
    }else{
        echo"<script> alert('Username is taken') </script>";
        header('Location: ../../create_acc.html');
        // header('Location: ../../signup.html');
    }
}
else{
    header('Location: ../../index.html');
}
 mysqli_close($conn);


