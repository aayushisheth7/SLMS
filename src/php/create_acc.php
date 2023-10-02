<?php 
include('dbconnect.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashpass=password_hash($password,PASSWORD_DEFAULT);

    $ins="INSERT INTO `login`(`username`, `pass`) VALUES ('$username','$hashpass')";
    if(mysqli_query($conn,$ins)){
        header('Location: ../../signup.html');
    }else{
        $re=true;
        header('Location: ../../create_acc.html');
    }
}
else{
    header('Location: ../../index.html');
}
 mysqli_close($conn);


?>