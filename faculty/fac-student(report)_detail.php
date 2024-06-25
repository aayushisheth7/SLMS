<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">

    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Report</title>
</head>
<style>/* General styles */


.report-container {
    width: 50%;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.report-header {
    text-align: center;
    margin-bottom: 20px;
}

.report-header h1 {
    color: #9C50CA;
    margin: 0;
}

.report-header h2,
.report-header h3 {
    color: #555;
    margin: 5px 0;
}

.report-section {
    margin-bottom: 20px;
}

.report-section h4 {
    margin-bottom: 10px;
    color: #9C50CA;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
}

.info-table,
.performance-table,
.attendance-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
}

.info-table th,
.info-table td,
.performance-table th,
.performance-table td,
.attendance-table th,
.attendance-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.performance-table th,
.attendance-table th {
    background-color: #f2f2f2;
    text-align: center;
}

.performance-table td,
.attendance-table td {
    text-align: center;
}
</style>
<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i><a href="faculty_home.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="faculty_home.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i  ><a href="faculty_student.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="faculty_student.php">Student</a><span>Student</span></li>
                </i>
                <i class="active"><a href="faculty_report.php"><img src="/src/img/icons/report_selected.svg" alt=""></a>
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
        <h2 style="color: #9C50CA;">Kakadiya Dharmi</h2>
        <section class="info">
            <h3 style="color: #9C50CA;">Report</h3>
            <div class="report-container">
        <header class="report-header">
            <h1>Student Report</h1>
            <h2>Kakadiya Dharmi</h2>
            <h3>Enrollment: 210430116108</h3>
        </header>

        <section class="report-section">
            <h4>Personal Information</h4>
            <table class="info-table">
                <tr>
                    <th>Name:</th>
                    <td>Kakadiya Dharmi</td>
                </tr>
                <tr>
                    <th>Enrollment Number:</th>
                    <td>210430116108</td>
                </tr>
                <tr>
                    <th>Class:</th>
                    <td>10th Grade</td>
                </tr>
                <tr>
                    <th>Age:</th>
                    <td>16</td>
                </tr>
                <tr>
                    <th>Contact:</th>
                    <td>+1-234-567-8901</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>KakadiyaDharmi@example.com</td>
                </tr>
            </table>
        </section>

        <section class="report-section">
            <h4>Academic Performance</h4>
            <table class="performance-table">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Marks</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Math</td>
                        <td>95</td>
                        <td>A+</td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>85</td>
                        <td>B+</td>
                    </tr>
                    <tr>
                        <td>Biology</td>
                        <td>88</td>
                        <td>B+</td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td>92</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>History</td>
                        <td>80</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Geography</td>
                        <td>78</td>
                        <td>C+</td>
                    </tr>
                    <tr>
                        <td>Art</td>
                        <td>85</td>
                        <td>B+</td>
                    </tr>
                    <tr>
                        <td>Computer Science</td>
                        <td>94</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Physical Education</td>
                        <td>89</td>
                        <td>B+</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="report-section">
            <h4>Attendance</h4>
            <table class="attendance-table">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Days Present</th>
                        <th>Days Absent</th>
                        <th>Total Days</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>January</td>
                        <td>20</td>
                        <td>1</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>February</td>
                        <td>18</td>
                        <td>2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>March</td>
                        <td>22</td>
                        <td>0</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>April</td>
                        <td>21</td>
                        <td>1</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>May</td>
                        <td>20</td>
                        <td>2</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>June</td>
                        <td>19</td>
                        <td>3</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>20</td>
                        <td>2</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>August</td>
                        <td>21</td>
                        <td>1</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>September</td>
                        <td>20</td>
                        <td>2</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>October</td>
                        <td>19</td>
                        <td>3</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>November</td>
                        <td>21</td>
                        <td>1</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>December</td>
                        <td>20</td>
                        <td>2</td>
                        <td>22</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
        </section>
    </main>
</body>

</html>