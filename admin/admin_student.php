<?php
session_start();
include('../src/php/dbconnect.php');
include('../src/php/student_data.php');
$sem;
if (isset($_GET['sem'])) {
    $sem = $_GET['sem'];
    echo "Selected Semester: " . $sem;
}

$student =  new Student($conn, $_SESSION['username']);
$student_data = $student->getSemStudent($sem);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/student_number.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Students</title>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i ><a href="admin_dashboard.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="admin_dashboard.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i class="active"><a href="admin_admission.php"><img src="/src/img/icons/clieant._active.svg" alt=""></a>
                    <li><a href="admin_admission.php">Admission</a><span>Admission</span></li>
                </i>
                <i><a href="admin_fees.php"><img src="/src/img/icons/report.svg" alt=""></a>
                    <li><a href="admin_fees.php">Fees detail</a><span>Fees detail</span></li>
                </i>
                <i><a href="admin_noticeboard.php"><img src="/src/img/icons/note text.svg" alt=""></a>
                    <li><a href="admin_noticeboard.php">Noticeboard</a><span>Noticeboard</span></li>
                </i>
                <i><a href="admin_placement.php"><img src="/src/img/icons/briefcase.svg" alt=""></a>
                    <li>
                        <pre><a href="admin_placement.php">Training/
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
            <a class="profile" href="admin_profile.html">
                <img src="/src/img/icons/profile.svg" alt=""></a>
            </div>
        </div>
    </div>

    <main>
        <!-- <h2 style="color: #9C50CA;">Semester-1</h2> -->
        <?php 
         echo "<h2 style=\"color: #9C50CA;\">Semester- $sem</h2>";
         ?>
        <section class="fee-list">
            <table class="fee-table">   
                <thead>
                <tr> 
                <th>Enroll No.</th>    
                <th>Name</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $num = $student_data->num_rows;

                    if ($num > 0) {
                        while ($row = $student_data->fetch_assoc()) {
                            extract($row);
                            echo "<tr>";
                            echo "<td> $id </td>";
                            echo "<td> $fname  $lname </td>";
                            echo "<td><a href=\"admin_studentdetail.php?username=$username\" class=\"button\">View Details</a></td>";
                            echo "<tr>";
                        }
                    }
                    ?>
                    <!-- <tr>
                        <td>210430116103</td>
                        <td>Bhatt Nishiket</td>
                        <td><a href="admin_studentdetail.php" class="button">View Details</a></td>
                    </tr> -->
                  </tbody>
                  </table>
        </section>
    </main>
</body>

</html>