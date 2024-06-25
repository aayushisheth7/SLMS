<?php
session_start();
include('../src/php/dbconnect.php');
include('../src/php/student_data.php');
include('../src/php/attendance.php');
include('../src/php/academic.php');

$username;
if (isset($_GET['username'])) {
    $username = $_GET['username'];
}

$student =  new Student($conn, $username);
$student_data = $student->getStudent($username);

$academic = new Academic($conn);
$acadedmic_data = $academic->getAcademmic($username);

$attendance = new Attendance($conn);
$attendance_data = $attendance->getAttendance($username);

if ($student_data->num_rows > 0) {
    $data = $student_data->fetch_assoc();
    extract($data);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/principal_home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/student_number.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Dashboard</title>
    <style>
        /* General styles */


        .report-container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .report-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .report-header h1 {
            color: #9C50CA;
            margin: 0;
        }

        .report-header h2,
        .report-header h3 {
            color: #555;
            margin: 5px 0;
        }

        .report-section {
            margin-bottom: 20px;
        }

        .report-section h4 {
            margin-bottom: 10px;
            color: #9C50CA;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        .info-table,
        .performance-table,
        .attendance-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .info-table th,
        .info-table td,
        .performance-table th,
        .performance-table td,
        .attendance-table th,
        .attendance-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .performance-table th,
        .attendance-table th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .performance-table td,
        .attendance-table td {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i><a href="principal_home.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="principal_home.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="principal_student.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="principal_student.php">Student</a><span>Student</span></li>
                </i>
                <i><a href="principal_faculty.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="principal_faculty.php">Faculty</a><span>faculty</span></li>
                </i>
                <i class="active"><a href="principal_report.php"><img src="/src/img/icons/report_selected.svg" alt=""></a>
                    <li><a href="principal_report.php">Report</a><span>Report</span></li>
                </i>
                <i><a href="principal_noticeboard.php"><img src="/src/img/icons/note text.svg" alt=""></a>
                    <li><a href="principal_noticeboard.php">Noticeboard</a><span>Noticeboard</span></li>
                </i>
                <i><a href="principal_placement.php"><img src="/src/img/icons/briefcase.svg" alt=""></a>
                    <li>
                        <pre><a href="principal_placement.php">Training/
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
                <a class="profile" href="principal_profile.html">
                    <img src="/src/img/icons/profile.svg" alt=""></a>
            </div>
        </div>
    </div>
    <main>

        <div class="report-container">
            <header class="report-header">
                <h1>Student Report</h1>
                <!-- <h2>Kakadiya Dharmi</h2> -->
                <?php
                echo "<h2>$fname  $lname</h2>";
                echo "<h3>Enrollment: $id</h3>";
                ?>
                <!-- <h3>Enrollment: 210430116108</h3> -->
            </header>

            <section class="report-section">
                <h4>Personal Information</h4>
                <table class="info-table">
                    <tr>
                        <th>Name:</th>
                        <?php
                        echo "<td>$fname  $lname</td>";
                        ?>
                        <!-- <td>Kakadiya Dharmi</td> -->
                    </tr>
                    <tr>
                        <th>Enrollment Number:</th>
                        <?php
                        echo "<td>$id</td>";
                        ?>
                        <!-- <td>210430116108</td> -->
                    </tr>
                    <tr>
                        <th>Sem:</th>
                        <?php
                        echo "<td>$sem</td>";
                        ?>
                        <!-- <td>10th Grade</td> -->
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <?php
                        echo "<td>$age</td>";
                        ?>
                        <!-- <td>16</td> -->
                    </tr>
                    <tr>
                        <th>Contact:</th>
                        <?php
                        echo "<td>$pnumber</td>";
                        ?>
                        <!-- <td>+1-234-567-8901</td> -->
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <?php
                        echo "<td>$email</td>";
                        ?>
                        <!-- <td>KakadiyaDharmi@example.com</td> -->
                    </tr>
                </table>
            </section>

            <section class="report-section">
                <h4>Academic Performance</h4>
                <table class="performance-table">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Marks</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num = $acadedmic_data->num_rows;

                    if ($num > 0) {
                        while ($row = $acadedmic_data->fetch_assoc()) {
                            extract($row);
                            echo "<tr>";
                            echo "<td> $subject </td>";
                            echo "<td> $marks </td>";
                            echo "<td> $grade </td>";
                            echo "</tr>";
                        }
                    }
                    ?>

                        <!-- <tr>
                            <td>Math</td>
                            <td>95</td>
                            <td>A+</td>
                        </tr> -->
                    </tbody>
                </table>
            </section>

            <section class="report-section">
                <h4>Attendance</h4>
                <table class="attendance-table">
                    <thead>
                        <tr>
                            <th>Month</th>
                            <th>Days Present</th>
                            <th>Days Absent</th>
                            <th>Total Days</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num = $attendance_data->num_rows;

                    if ($num > 0) {
                        while ($row = $attendance_data->fetch_assoc()) {
                            extract($row);
                            echo "<tr>";
                            if($month == 1){
                                echo "<td> January </td>";
                            }
                            elseif($month == 2){
                                echo "<td> February </td>";
                            }
                            elseif($month == 3){
                                echo "<td> March </td>";
                            }
                            elseif($month == 4){
                                echo "<td> April </td>";
                            }
                            elseif($month == 5){
                                echo "<td> May </td>";
                            }
                            elseif($month == 6){
                                echo "<td> June </td>";
                            }
                            elseif($month == 7){
                                echo "<td> JJuly </td>";
                            }
                            elseif($month == 8){
                                echo "<td> August </td>";
                            }
                            elseif($month == 9){
                                echo "<td> September </td>";
                            }
                            elseif($month == 10){
                                echo "<td> October </td>";
                            }
                            elseif($month == 11){
                                echo "<td> November </td>";
                            }
                            elseif($month == 12){
                                echo "<td> December </td>";
                            }
                            echo "<td> $present </td>";
                            echo "<td> $absent </td>";
                            echo "<td> $total </td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                        <!-- <tr>
                            <td>January</td>
                            <td>20</td>
                            <td>1</td>
                            <td>21</td>
                        </tr> -->
                    </tbody>
                </table>
            </section>
        </div>
        </section>
    </main>
</body>

</html>