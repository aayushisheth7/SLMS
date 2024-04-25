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
            $_SESSION['username'] = $username;
            if($row['role'] == "Faculty"){
                header("Location: ../../faculty/faculty_home.php");
            }
            elseif($row['role'] == "Student"){
            header("Location: ../../student/student_home.php");
            }
            elseif($row['role'] == "Admin"){
                header("Location: ../../admin/admin_dashboard.php");
            }
            elseif($row['role'] == "Principal"){
                header("Location: ../../principal/principal_home.php");
            }
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