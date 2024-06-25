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
                <i><a href="admin_dashboard.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="admin_dashboard.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="admin_admission.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="admin_admission.php">Admission</a><span>Admission</span></li>
                </i>
                <i class="active" ><a href="admin_fees.php"><img src="/src/img/icons/report_selected.svg" alt=""></a>
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
        <h1 style="color: #9C50CA;">Students Fees Details</h1>
        <section class="content">
        <div class="module">
            <div>
            <h2>Information Technology</h2>
            </div>
            <a href="adminfee_it.php" class="button"><img src="/src/img/icons/expend_right.svg" alt=""></a>
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