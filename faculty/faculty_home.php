<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/faculty_home.css">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Dashboard</title>
</head>
<style>
    .timetable {
    width: 100%;
    border-collapse: collapse;
}

.timetable th,
.timetable td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
}

.timetable th {
    background-color: #9C50CA;
    color: #fff;
}

.timetable tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.timetable tbody tr:hover {
    background-color: #f1f1f1;
}
</style>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i class="active"><a href="faculty_home.php"><img src="/src/img/icons/deshboard_icon.svg"></a>
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
                <i><a href="faculty_progress.php"><img src="/src/img/icons/document.svg" alt=""></a>
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
        <h1 style="color: #9C50CA;">Welcome !</h1>
        <section class="calendar">
            <header class="calendar-header">
                <h3 style="color: #9C50CA;">Your Schedule</h3>
              <!-- <div class="prev-month">⬅</div> -->
              <div class="month-year">December 2023</div>
              <!-- <div class="next-month">➡</div> -->
            </header>
            <table class="calendar-table">   
          <thead>
          <tr> 
          <th>Sun</th>    
          <th>Mon</th>
          <th>Tue</th>
          <th>Wed</th>
          <th>Thu</th>
          <th>Fri</th>
          <th>Sat</th>
          </tr>
          </thead>
          <tbody>
            </tbody>
            </table>
          </section>

          <section class="time">
            <header class="time-header">
                <h3 style="color: #9C50CA;">Your TimeTable</h3>

            </header>
            <table class="timetable">
        <thead>
            <tr>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Subject</th>
                <th>Room</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Monday</td>
                <td>09:00 AM</td>
                <td>10:30 AM</td>
                <td>Math</td>
                <td>Room 101</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>11:00 AM</td>
                <td>12:30 PM</td>
                <td>Chemistry</td>
                <td>Room 105</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>10:00 AM</td>
                <td>11:30 AM</td>
                <td>English</td>
                <td>Room 103</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>01:00 PM</td>
                <td>02:30 PM</td>
                <td>Biology</td>
                <td>Room 107</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>11:00 AM</td>
                <td>12:30 PM</td>
                <td>Physics</td>
                <td>Room 102</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>02:00 PM</td>
                <td>03:30 PM</td>
                <td>History</td>
                <td>Room 108</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>09:00 AM</td>
                <td>10:30 AM</td>
                <td>Geography</td>
                <td>Room 104</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>11:00 AM</td>
                <td>12:30 PM</td>
                <td>Art</td>
                <td>Room 110</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>10:00 AM</td>
                <td>11:30 AM</td>
                <td>Computer Science</td>
                <td>Room 106</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>01:00 PM</td>
                <td>02:30 PM</td>
                <td>Physical Education</td>
                <td>Gym</td>
            </tr>
        </tbody>
    </table>
          </section>
          
    </main>
    <script src="/src/js/cel.js"></script>
</body>

</html>