<?php
include('../src/php/dbconnect.php');
include('../src/php/finance.php');
session_start();

$data = new Finance($conn,$_SESSION['username']);
$result = $data->getFees();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/finance.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Finance</title>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i><a href="student_home.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="student_home.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="student_class.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="student_class.php">Class</a><span>Class</span></li>
                </i>
                <i><a href="student_event.php"><img src="/src/img/icons/calendar.svg" alt=""></a>
                    <li><a href="student_event.php">Events</a><span>Events</span></li>
                </i>
                <i><a href="student_noticeboard.php"><img src="/src/img/icons/note text.svg" alt=""></a>
                    <li><a href="student_noticeboard.php">Noticeboard</a><span>Noticeboard</span></li>
                </i>
                <i class="active"><a href="student_finance.php"><img src="/src/img/icons/wallet_active.svg" alt=""></a>
                    <li><a href="student_finance.php">Finance</a><span>Finance</span></li>
                </i>
                <i><a href="student_module.php"><img src="/src/img/icons/document.svg" alt=""></a>
                    <li><a href="student_module.php">Module</a><span>Module</span></li>
                </i>
                <i><a href="student_placement.php"><img src="/src/img/icons/briefcase.svg" alt=""></a>
                    <li>
                        <pre><a href="student_placement.php">Training/
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
                <img src="/src/img/icons/profile.svg" alt="">
            </div>
        </div>
    </div>

    <main>
        <h2 style="color: #9C50CA;">Fee details</h2>
        <section class="fee-list">
            <table class="fee-table">   
                <thead>
                <tr> 
                <th>Sr. no</th>    
                <th>Status</th>
                <th>Date</th>
                <th>Recept no</th>
                <th>Amount</th>
                <th>Download recept</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $num = $result->num_rows;
                    if($num >0){
                        while($row=$result->fetch_assoc()){
                            extract($row);
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$status</td>";
                            if($date == null){
                                echo "<td>-</td>";
                            }else{
                                $Mdate = date('d-m-y',strtotime($date));
                                echo "<td>$Mdate</td>";
                            }
                            if($recept_no == null){
                                echo "<td>-</td>";
                            }else{
                                echo "<td>$recept_no</td>";
                            }
                            echo "<td>$amount</td>";
                            if($link == null){
                                echo "<td><a href=\"#\" class=\"button-not\">View</a></td>";
                            }
                            else{
                                echo "<td><a href=\"$link\" class=\"button\">View</a></td>";
                            }
                        }
                    }
                ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Pending</td>
                        <td>-</td>
                        <td>-</td>
                        <td>30,000</td>
                        <td><a href="#" class="button-not">View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Done</td>
                        <td>12-3-23</td>
                        <td>R-133642</td>
                        <td>30,000</td>
                        <td><a href="#" class="button">View</a></td>
                    </tr> -->
    
                  </tbody>
                  </table>
        </section>
    
      </main>
</body>

</html>