<?php
include('../src/php/dbconnect.php');
include('../src/php/event.php');

$data = new Event($conn);
$result = $data->getEvent();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/event.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Events</title>
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
                <i class="active"><a href="student_event.php"><img src="/src/img/icons/calendar_active.svg" alt=""></a>
                    <li><a href="student_event.php">Events</a><span>Events</span></li>
                </i>
                <i><a href="student_noticeboard.php"><img src="/src/img/icons/note text.svg" alt=""></a>
                    <li><a href="student_noticeboard.php">Noticeboard</a><span>Noticeboard</span></li>
                </i>
                <i><a href="student_finance.php"><img src="/src/img/icons/wallet.svg" alt=""></a>
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
            <a class="profile" href="student_profile.html">
                <img src="/src/img/icons/profile.svg" alt=""></a>
            </div>
        </div>
    </div>


    <section class="content">
        <h1 style="color: #9C50CA; margin-left: 10px;">Upcoming events</h1>
        <h3 style="margin-left: 10px; font-weight: normal;">Here is the event schedule for the upcoming months</h3>
        <?php
        $num = $result->num_rows;
        if($num>0){
            while($row = $result->fetch_assoc()){
                extract($row);
                echo "<div class=\"event\">";
                echo "<h3>$name</h3>";
                $Mdate = date('d-m-y',strtotime($date));
                echo "<h4>Date: $Mdate</h4>";
                $amPmTime = date("h:i a", strtotime($timefrom ));
                $amPmTime2 = date("h:i a", strtotime($timeto ));
                echo "<h4>Time: $amPmTime to $amPmTime2</h4>";
                echo "<h4>Place: $place </h4>";
                echo "<p>Details: $details</p>";
                echo "</div>";

            }
        }
        ?>
        <!-- <div class="event">
            <h3>Janmashtami celebration</h3>
            <h4>Date:5-9-2023</h4>
            <h4>Time:8:00am to 11:00am</h4>
            <h4>Place: School </h4>
            <p>Details: The Hindu god Lord Krishna was born on this day, and people
                celebrate this day by treating the day as if the Lord has taken birth
                in their houses.</p>
          </div> -->
        </section>
</body>

</html>