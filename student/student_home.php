<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/home2.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Dashboard</title>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i class="active"><a href="student_home.html"><img src="/src/img/icons/deshboard_icon.svg"></a>
                    <li><a href="student_home.html">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="student_class.html"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="student_class.html">Class</a><span>Class</span></li>
                </i>
                <i><a href="student_event.html"><img src="/src/img/icons/calendar.svg" alt=""></a>
                    <li><a href="student_event.html">Events</a><span>Events</span></li>
                </i>
                <i><a href="student_noticeboard.html"><img src="/src/img/icons/note text.svg" alt=""></a>
                    <li><a href="student_noticeboard.html">Noticeboard</a><span>Noticeboard</span></li>
                </i>
                <i><a href="student_finance.html"><img src="/src/img/icons/wallet.svg" alt=""></a>
                    <li><a href="student_finance.html">Finance</a><span>Finance</span></li>
                </i>
                <i><a href="student_module.html"><img src="/src/img/icons/document.svg" alt=""></a>
                    <li><a href="student_module.php">Module</a><span>Module</span></li>
                </i>
                <i><a href="student_placement.html"><img src="/src/img/icons/briefcase.svg" alt=""></a>
                    <li>
                        <pre><a href="student_placement.html" id="plac">Training/
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
    <h2 style="color: #9C50CA;">Hi dear,</h2>
    <p>Here is the report based on your class perfomance</p>
    <section class="calendar">
        <header class="calendar-header">
            <h3 style="color: #9C50CA;">Your presence in classroom</h3>
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

    <section class="test-list">
      <h2 style="color: #9C50CA; margin-left: 10px;">Test List</h2>
        <table class="test-table">   
            <thead>
            <tr> 
            <th>No</th>    
            <th>Test-name</th>
            <th>subject</th>
            <th>Date</th>
            <th>Total Marks</th>
            <th>Your Marks</th>
            <th>Paper</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>class-test</td>
                    <td>Math</td>
                    <td>16-11</td>
                    <td>30</td>
                    <td>12</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>class-test</td>
                    <td>Math</td>
                    <td>16-11</td>
                    <td>30</td>
                    <td>12</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>class-test</td>
                    <td>Math</td>
                    <td>16-11</td>
                    <td>30</td>
                    <td>12</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>class-test</td>
                    <td>Math</td>
                    <td>16-11</td>
                    <td>30</td>
                    <td>12</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>class-test</td>
                    <td>Math</td>
                    <td>16-11</td>
                    <td>30</td>
                    <td>12</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>class-test</td>
                    <td>Math</td>
                    <td>16-11</td>
                    <td>30</td>
                    <td>12</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>class-test</td>
                    <td>Math</td>
                    <td>16-11</td>
                    <td>30</td>
                    <td>12</td>
                    <td><a href="#" class="button">View</a></td>
                </tr>
              </tbody>
              </table>
    </section>

  </main>
  <script src="/src/js/cel.js"></script>
</body>

</html>