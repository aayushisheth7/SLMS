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
                <i class="active"><a href="admin_dashboard.php"><img src="/src/img/icons/deshboard_icon.svg"></a>
                    <li><a href="admin_dashboard.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="admin_admission.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
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
                <img src="/src/img/icons/profile.svg" alt="">
            </div>
        </div>
    </div>

    <main>
        <h2 style="color: #9C50CA;">ABC XYZ</h2>
        <section class="info">
            <h3 style="color: #9C50CA;">General Information</h3>
            <div class="img">
                <img src="" alt="" srcset="">
                <section style="display: flex; flex-flow: column; margin-left: 10px;" >
                    <div style="display: flex;">
                    <p class="lable">Name:</p>
                    <p>ABC XYZ</p>
                </div>
                    <div style="display: flex;">
                        <p class="lable">Enrollment No.:</p>
                         <p>210430116103</p>
                    </div>
                </section>
            </div>
            <div>
            <section style="display: flex; " >
                 <div style="display: flex;">
                <p class="lable">Branch:</p>
                <p>Information Technology</p>
            </div>
            <div style="display: flex; margin-left: 30px;">
                <p class="lable">Contact No.:</p>
                <p>+91 1548976249</p>
            </div>
            </section>
            </div>
            <div>
                <p class="lable">Address:</p>
                <p>Bhavnagar, Gujarat , India. 364001</p>
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
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td>7.9</td>
                    <td>7.1</td>
                    <td>7.15</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>0</td>
                    <td>7.9</td>
                    <td>7.1</td>
                    <td>7.15</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>0</td>
                    <td>7.9</td>
                    <td>7.1</td>
                    <td>7.15</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>0</td>
                    <td>7.9</td>
                    <td>7.1</td>
                    <td>7.15</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>0</td>
                    <td>7.9</td>
                    <td>7.1</td>
                    <td>7.15</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
              </tbody>
              </table>
        </section>
    </main>
</body>

</html>