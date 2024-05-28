<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/faculty_noticeboard.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Noticeboard</title>
    <style>
        /* Styles for dialog box */
        .dialog {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .dialog h2 {
            margin-top: 0;
        }

        .dialog input[type="text"],
        .dialog textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .dialog button {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .dialog button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <img src="/src/img/icons/SLMS.svg">
        <nav>
            <ul>
                <i ><a href="faculty_home.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
                    <li><a href="faculty_home.php">Dashboard</a><span>Dashboard</span></li>
                </i>
                <i><a href="faculty_student.php"><img src="/src/img/icons/clieant.svg" alt=""></a>
                    <li><a href="faculty_student.php">Student</a><span>Student</span></li>
                </i>
                <i><a href="faculty_report.php"><img src="/src/img/icons/report.svg" alt=""></a>
                    <li><a href="faculty_report.php">Report</a><span>Report</span></li>
                </i>
                <i class="active"><a href="faculty_noticeboard.php"><img src="/src/img/icons/note text_active.svg" alt=""></a>
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
        <h2 style="color: #9C50CA;">Notice-Board</h2>
        <section class="announcement">
            <header class="calendar-header">
                <h3 style="color: #9C50CA; margin-left: 10px;">Announcement</h3>
            </header>
            <button id="addNewAnn" class="button">Add New</button>
            <table class="announcement-table">   
          <tbody>
            <tr>
                <td><li>New academic programs are being offered.</li></td>
            </tr>
            <tr>
                <td><li>New scholarships are available.</li></td>
            </tr>
            <tr>
                <td><li>Faculty and staff directory updated.</li></td>
            </tr>
            <tr>
                <td><li>Financial aid deadline approaching.</li></td>
            </tr>
            <tr>
                <td><li>New student orientation scheduled.</li></td>
            </tr>
            <tr>
                <td><li>New academic programs are being offered.</li></td>
            </tr>
            <tr>
                <td><li>New student orientation scheduled.</li></td>
            </tr>
            <tr>
                <td><li>New scholarships are available.</li></td>
            </tr>
            </tbody>
            </table>
          </section>
    
        <section class="news-list">
          <h2 style="color: #9C50CA; margin-left: 10px;">News</h2>
          <button  id="addNewNews" class="button">Add New</button>
            <table class="news-table">
                <tbody>
                    <tr> 
                        <td><li>College hosts art exhibition</li></td>
                    </tr>
                    <tr>
                        <td><li>College announces new HOD for computer department</li></td>
                    </tr>
                    <tr>
                        <td><li>College students win awards</li></td>
                    </tr>
                    <tr>
                        <td><li>College announces new scholarship program</li></td>
                    </tr>
                    <tr>
                        <td><li>Students develop new technology to improve water quality.</li></td>
                    </tr>
                    <tr>
                        <td><li>College announces new scholarship program</li></td>
                    </tr>
                    <tr>
                        <td><li>College announces new scholarship program</li></td>
                    </tr>
                  </tbody>
                  </table>
        </section>
    
      </main>
      <div id="dialogAnn" class="dialog">
        <h2>Add Announcement</h2>
        <form id="dialogForm">
            <input type="text" name="title" placeholder="Title" required><br>
            <textarea name="description" placeholder="Description" required></textarea><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div id="dialogNews" class="dialog">
        <h2>Add News</h2>
        <form id="dialogForm">
            <input type="text" name="title" placeholder="Title" required><br>
            <textarea name="description" placeholder="Description" required></textarea><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const addNewAnn = document.getElementById("addNewAnn");
            const addNewNews = document.getElementById("addNewNews");
            const dialogAnn = document.getElementById("dialogAnn");
            const dialogNews = document.getElementById("dialogNews");
            const dialogForm = document.getElementById("dialogForm");

            addNewAnn.addEventListener("click", function () {
                dialogAnn.style.display = "block";
            });
            addNewNews.addEventListener("click", function () {
                dialogNews.style.display = "block";
            });

            dialogForm.addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // Get form data
                const formData = new FormData(dialogForm);
                const title = formData.get("title");
                const description = formData.get("description");

                // Do something with the form data (e.g., submit to server)
                console.log("Title:", title);
                console.log("Description:", description);

                // Clear form fields
                dialogForm.reset();

                // Hide the dialog box
                dialogAnn.style.display = "none";
                dialogNews.style.display = "none";
            });
        });
    </script>
</body>

</html>