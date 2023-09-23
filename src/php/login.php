<?php 
include('dbconnect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$ins="SELECT * FROM `login` WHERE username like ('$username') and pass like ('$password')";
$query = mysqli_query($conn, $ins) or die(mysqli_error($conn));
$count=mysqli_num_rows($query);
if($count >=1){
    ?>
    <script>
        alert("login success!")
    </script>
    <?php
    session_start();
    $_SESSION['username']=$username;
    header("Location: ../../student_home.html");
}
else{
    ?>
    <script>
        alert("Wrong username ans password");
    </script>
    <?php
    // header('Location: ../../index.html');
}
?>

