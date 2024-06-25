<?php
session_start();
include('../src/php/dbconnect.php');
include('../src/php/student_data.php');
include('../src/php/university_res.php');

$username;
if (isset($_GET['username'])) {
    $username = $_GET['username'];
}

$student =  new Student($conn, $username);
$student_data = $student->getStudent($username);
if($student_data->num_rows >0){
$data = $student_data->fetch_assoc();
extract($data);
}

$uni = new UniversityResults($conn);
$uni_result = $uni->getResults($username);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/student_details.css">
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
        <!-- <h2 style="color: #9C50CA;">Bhatt Nishiket</h2> -->
        <?php
        echo "<h2 style=\"color: #9C50CA;\">$fname  $lname</h2>";
        ?>
        <section class="info">
            <h3 style="color: #9C50CA;">General Information</h3>
            <div class="img">
                <img src="" alt="" srcset="">
                <section style="display: flex; flex-flow: column; margin-left: 10px;" >
                    <div style="display: flex;">
                    <p class="lable">Name:</p>
                    <?php
                        echo "<p>$fname  $lname</p>";
                        ?>
                    <!-- <p>Bhatt Nishiket</p> -->
                </div>
                    <div style="display: flex;">
                        <p class="lable">Enrollment No.:</p>
                        <?php
                        echo "<p>$id</p>";
                        ?>
                         <!-- <p>210430116103</p> -->
                    </div>
                </section>
            </div>
            <div>
            <section style="display: flex; " >
                 <div style="display: flex;">
                <p class="lable">Branch:</p>
                <?php
                        echo "<p>$course</p>";
                        ?>
                <!-- <p>Information Technology</p> -->
            </div>
            <div style="display: flex; margin-left: 30px;">
                <p class="lable">Contact No.:</p>
                <?php
                        echo "<p>$pnumber</p>";
                        ?>
                <!-- <p>+91 1548976249</p> -->
            </div>
            </section>
            </div>
            <div>
                <p class="lable">Address:</p>
                <?php
                        echo "<p>$address</p>";
                        ?>
                <!-- <p>Bhavnagar, Gujarat , India. 364001</p> -->
            </div>
            <div>
                <section style="display: flex; " >
                    <div style="display: flex;">
                <p class="lable">Admission Year:</p>
                <p>2021</p>
            </div>
            <div style="display: flex; margin-left: 30px;">
                <p class="lable">Passing Year</p>
                <p>2025</p>
            </div>
            </section>
            </div>
            <div>
                <p class="lable">CGPA:</p>
                <p>7.69</p>
            </div>
        </section>
        <section class="grade">
            <h2 style="color: #9C50CA; margin-left: 10px;">University's Results</h2>
        <table class="grade-table">   
            <thead>
            <tr> 
            <th>Sem</th>    
            <th>Backlog</th>
            <th>SPI</th>
            <th>CPI</th>
            <th>CGPA</th>
            </tr>
            </thead>
            <tbody>
            <?php
                    $num = $uni_result->num_rows;

                    if ($num > 0) {
                        while ($row = $uni_result->fetch_assoc()) {
                            extract($row);
                            echo "<tr>";
                            echo "<td> $sem </td>";
                            echo "<td>" . ($backlog === null ? '--' : $backlog) . "</td>";
                            echo "<td>" . ($spi === null ? '--' : $spi) . "</td>";
                            echo "<td>" . ($cpi === null ? '--' : $cpi) . "</td>";
                            echo "<td>" . ($cgpa === null ? '--' : $cgpa) . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                <!-- <tr>
                    <td>1</td>
                    <td>0</td>
                    <td>7.9</td>
                    <td>7.1</td>
                    <td>7.15</td>
                </tr> -->
              </tbody>
              </table>
        </section>
    </main>
</body>

</html>