<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/principal_placement.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Training/Placement</title>
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

    <section class="content">
        <h1 style="color: #9C50CA; margin-left: 10px;">Placed Student Details</h1>
        <div class="placement" style="margin-top: 20px;">
        <h3>ABC</h3>
            <p> Company: Techsoft</p>
            <p> package: 5 LPA </p>
            <p> CGPA : 8.00</p>
            <p> Branch: Web Frontend</p>
          </div>
        <div class="placement" style="margin-top: 20px;">
            <h3>ABC</h3>
                <p> Company: Techsoft</p>
                <p> package: 5 LPA </p>
                <p> CGPA : 8.00</p>
                <p> Branch: Web Frontend</p>
              </div>
        <div class="placement" style="margin-top: 20px;">
            <h3>ABC</h3>
                    <p> Company: Techsoft</p>
                    <p> package: 5 LPA </p>
                    <p> CGPA : 8.00</p>
                    <p> Branch: Web Frontend</p>
            </div>
        <div class="placement" style="margin-top: 20px;">
            <h3>ABC</h3>
                        <p> Company: Techsoft</p>
                        <p> package: 5 LPA </p>
                        <p> CGPA : 8.00</p>
                        <p> Branch: Web Frontend</p>
            </div>

        <h1 style="color: #9C50CA; margin-left: 10px;">They are on campus !!</h1>
        
        <div class="placement" style="margin-top: 20px;">
            <h3>TechSoft</h3>
            <p>We are product base company and we are hiring for Php and frontend developer </p>
            <p class="applied">Applied by: 30 student</p>
            <a href="#" class="button">View</a>
          </div>
          <div class="placement">
            <h3>TechSoft</h3>
            <p>We are product base company and we are hiring for Php and frontend developer </p>
            <p class="applied">Applied by: 30 student</p>
            <a href="#" class="button">View</a>
          </div>
          <div class="placement">
            <h3>TechSoft</h3>
            <p>We are product base company and we are hiring for Php and frontend developer </p>
            <p class="applied">Applied by: 30 student</p>
            <a href="#" class="button">View</a>
          </div>
          <div class="placement">
            <h3>TechSoft</h3>
            <p>We are product base company and we are hiring for Php and frontend developer </p>
            <p class="applied">Applied by: 30 student</p>
            <a href="#" class="button">View</a>
          </div>
          <div class="placement">
            <h3>TechSoft</h3>
            <p>We are product base company and we are hiring for Php and frontend developer </p>
            <p class="applied">Applied by: 30 student</p>
            <a href="#" class="button">View</a>
          </div>
          <div class="placement">
            <h3>TechSoft</h3>
            <p>We are product base company and we are hiring for Php and frontend developer </p>
            <p class="applied">Applied by: 30 student</p>
            <a href="#" class="button">View</a>
          </div>
          
        </section>
</body>

</html>