<?php 
include('dbconnect.php');

$username='nishiket04';
$password='Nishiket#04';

$ins="SELECT * FROM `login` WHERE username like ('$username') and pass like ('$password')";
$query = mysqli_query($conn, $ins) or die(mysqli_error($conn));
$count=mysqli_num_rows($query);
if($count >=1){
    session_start();
    $_SESSION['username']=$usernmae;
    echo "login";
?>
    <script>
      alert('Login Successfully');
    </script>
<?php
    header("Location: ../../student_home.html");
}
else{
    echo "fail";
}

?>

