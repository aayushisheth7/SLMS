<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/principal_student.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Students</title>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i><a href="principal_home.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="principal_home.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i class="active" ><a href="principal_student.php"><img src="/src/img/icons/clieant._active.svg" alt=""></a>
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
            <a class="profile" href="principal_profile.html">
                <img src="/src/img/icons/profile.svg" alt=""></a>
            </div>
        </div>
    </div>

    <main>
        <h1 style="color: #9C50CA;">Department Student Details</h1>
        <section class="content">
        <div class="module">
            <div>
            <h2>Semester-1</h2>
            </div>
            <a href="pri_student.php?sem=1" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Semester-2</h2>
            </div>
            <a href="pri_student.php?sem=2" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Semester-3</h2>
            </div>
            <a href="pri_student.php?sem=3" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>

          <div class="module">
            <div>
            <h2>Semester-4</h2>
            </div>
            <a href="pri_student.php?sem=4" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Semester-5</h2>
            </div>
            <a href="pri_student.php?sem=5" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Semester-6</h2>
            </div>
            <a href="pri_student.php?sem=6" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Semester-7</h2>
            </div>
            <a href="pri_student.php?sem=7" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
          <div class="module">
            <div>
            <h2>Semester-8</h2>
            </div>
            <a href="pri_student.php?sem=8" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
          </div>
        </section>
    </main>
</body>

</html>