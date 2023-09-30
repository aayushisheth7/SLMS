<?php 
include('dbconnect.php');
if(isset($_POST['username']) && isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sel="SELECT * FROM `login` WHERE username like ('$username') and pass like ('$password')";
$query = mysqli_query($conn, $sel) or die(mysqli_error($conn));
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
    mysqli_close($conn);
}
else{
    ?>
    <script>
        alert("Wrong username ans password");
    </script>
    <?php
    }
}
else{
    header('Location: ../../index.html');
    mysqli_close($conn);
}
?>

