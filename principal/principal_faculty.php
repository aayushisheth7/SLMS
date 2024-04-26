<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/principal_faculty.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Faculty</title>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i class="active"><a href="principal_home.php"><img src="/src/img/icons/deshboard_icon.svg"></a>
                    <li><a href="principal_home.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="principal_student.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="principal_student.php">Student</a><span>Student</span></li>
                </i>
                <i><a href="principal_faculty.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="principal_faculty.php">Faculty</a><span>faculty</span></li>
                </i>
                <i><a href="principal_report.php"><img src="/src/img/icons/report.svg" alt=""></a>
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
                <img src="/src/img/icons/profile.svg" alt="">
            </div>
        </div>
    </div>

    <main>
        <h1 style="color: #9C50CA;">Department Faculty Details</h1>
        <section class="content">
        <div class="module">
            <div>
            <h2>Information Technology</h2>
            </div>
            <a href="pri_faculty.html" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Civil Engineering</h2>
            </div>
            <a href="#" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Electrical Engineering</h2>
            </div>
            <a href="#" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>

          <div class="module">
            <div>
            <h2>Mechanical Engineering </h2>
            </div>
            <a href="#" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Computer Engineering</h2>
            </div>
            <a href="#" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Environmental Engineering</h2>
            </div>
            <a href="#" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          
            
        </section>
    </main>
</body>

</html>