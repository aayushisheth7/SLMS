<?php
session_start();
include('../src/php/dbconnect.php');
include('../src/php/module.php');

// Check if the request is to delete a module
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    $data = new Module($conn);
    $result = $data->deeleteModule($id);

    if ($result) {
        echo "Module deleted successfully.";
    } else {
        echo "Failed to delete module.";
    }
    exit; 
}

$sem;
if (isset($_GET['sem'])) {
    $sem = $_GET['sem'];
    echo "Selected Semester: " . $sem;
}

$data = new Module($conn);
$result = $data->getModule($sem);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/module.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Previous Module</title>
    <script>
        function deleteModule(id) {
            if (confirm("Are you sure you want to delete this module?")) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "prev_module.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert(xhr.responseText);
                        location.reload();
                    }
                };
                xhr.send("delete_id=" + id);
            }
        }
    </script>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i ><a href="faculty_home.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="faculty_home.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="faculty_student.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="faculty_student.php">Student</a><span>Student</span></li>
                </i>
                <i><a href="faculty_report.php"><img src="/src/img/icons/report.svg" alt=""></a>
                    <li><a href="faculty_report.php">Report</a><span>Report</span></li>
                </i>
                <i><a href="faculty_noticeboard.php"><img src="/src/img/icons/note text.svg" alt=""></a>
                    <li><a href="faculty_noticeboard.php">Noticeboard</a><span>Noticeboard</span></li>
                </i>
                <i class="active"><a href="faculty_progress.php"><img src="/src/img/icons/document_active.svg" alt=""></a>
                    <li><a href="faculty_progress.php">Module</a><span>Module</span></li>
                </i>
                <i><a href="faculty_placement.php"><img src="/src/img/icons/briefcase.svg" alt=""></a>
                    <li>
                        <pre><a href="faculty_placement.php">Training/
placement</a><span>Training/
    placement</span></pre>
                    </li>
                </i>
                <i class="logout"><a href="#"><img src="/src/img/icons/logout.svg" alt=""></a>
                    <li><a href="/src/php/logout.php">Logout</a><span>Logout</span></li>
                </i>

            </ul>
        </nav>
    </div>
    <div class="srch">
        <form action="/src/php/home.php" method="post">
            <input type="search" name="srch" class="srchbar">
            <input type="submit" value="submit" class="srchicon">
        </form>

        <div class="notipro">

            <div class="notification">
                <img src="/src/img/icons/notification.svg" alt="">
            </div>
            <div class="profile">
            <a class="profile" href="faculty_profile.html">
                <img src="/src/img/icons/profile.svg" alt=""></a>
            </div>
        </div>
    </div>

    <main>
        <section class="content">
        <?php
    $num = $result->num_rows;

    if($num > 0 ){
        while($row = $result->fetch_assoc()){
            extract($row);
            echo "<div class=\"module\"> ";
            echo "<h2>$name</h2>";
            echo "<h3>$type</h3>";
            echo "<p>$detail</p>";
            echo "<button class=\"button\" onclick=\"deleteModule($id)\">Delete</button>";
            echo "</div>";
        }
    }
    else{
        echo json_encode(array('message' => ' nothing'));
    
    }
    ?>
            <!-- <div class="module">
                <h2>Module 1</h2>
                <h3>Assignments</h3>
                <p>Here is a list of assignments you have to do during this year/month/week.</p>
                <a href="#" class="button">Delete</a>
            </div> -->
        </section>
        
    </main>
</body>

</html>