<?php
include('dbconnect.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sel = "SELECT * FROM `login` WHERE username like ('$username')";
    try {
        $query = mysqli_query($conn, $sel) or die(mysqli_error($conn));
    } catch (mysqli_sql_exception) {
        echo "Somthing Went Worng";
    }
    
    
    $count = mysqli_num_rows($query);
    
    if ($count == 1) {
        $row = mysqli_fetch_assoc($query);
        if (password_verify($password, $row['pass'])) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: ../../student/student_home.html");
        } else {
            header("Location: ../../index.html");
        }
        mysqli_close($conn);
    } else {
?>
        <script>
            alert("Wrong username ans password");
        </script>
<?php
    }
} else {
    header('Location: ../../index.html');
    mysqli_close($conn);
}
?>