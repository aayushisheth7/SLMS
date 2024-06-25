<?php
include('../src/php/dbconnect.php');
include('../src/php/news.php');
include('../src/php/announcement.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['announcement'])) {
        $announcementText = $_GET['announcement'];

        $announcement = new Announcement($conn);
        $result = $announcement->addAnnouncement($announcementText);
    }

    if (isset($_GET['news'])) {
        $newsText = $_GET['news'];

        $news = new News($conn);
        $result = $news->addNews($newsText);
    }
}




$data = new News($conn);
$result = $data->getNews();

$data1 = new Announcement($conn);
$result1 = $data1->getAnnouncement();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/principal_noticeboard.css">
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
                <i><a href="principal_home.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
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
                <i class="active"><a href="principal_noticeboard.php"><img src="/src/img/icons/note text_active.svg" alt=""></a>
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
        <h2 style="color: #9C50CA;">Notice-Board</h2>
        <section class="announcement">
            <header class="calendar-header">
                <h3 style="color: #9C50CA; margin-left: 10px;">Announcement</h3>
            </header>
            <button id="addNewAnn" class="button">Add New</button>
            <table class="announcement-table">   
          <tbody>
          <?php
                    $num = $result1->num_rows;
                    if ($num > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            extract($row);
                            echo "<tr>";
                            echo "<td><li>$announcement</li></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
            <!-- <tr>
                <td><li>New academic programs are being offered.</li></td>
            </tr> -->
            </tbody>
            </table>
          </section>
    
        <section class="news-list">
          <h2 style="color: #9C50CA; margin-left: 10px;">News</h2>
          <button id="addNewNews" class="button">Add New</button>
            <table class="news-table">
                <tbody>
                <?php
                    $num1 = $result->num_rows;
                    if ($num1 > 0) {
                        while ($row1 = $result->fetch_assoc()) {
                            extract($row1);
                            echo "<tr>";
                            echo "<td><li>$news</li></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    <!-- <tr>
                        <td><li>College hosts art exhibition</li></td>
                    </tr> -->
                  </tbody>
                  </table>
        </section>
    
      </main>
      <div id="dialogAnn" class="dialog">
        <h2>Add Announcement</h2>
        <form id="dialogForm">
            <textarea name="announcement" placeholder="Announcement" required></textarea><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div id="dialogNews" class="dialog">
        <h2>Add News</h2>
        <form id="dialogForm">
            <textarea name="news" placeholder="News" required></textarea><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dialogAnn = document.getElementById("dialogAnn");
            const dialogNews = document.getElementById("dialogNews");
            const dialogFormAnn = document.getElementById("dialogFormAnn");
            const dialogFormNews = document.getElementById("dialogFormNews");

            document.getElementById("addNewAnn").addEventListener("click", function() {
                dialogAnn.style.display = "block";
            });

            document.getElementById("addNewNews").addEventListener("click", function() {
                dialogNews.style.display = "block";
            });

            dialogFormAnn.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                const formData = new FormData(dialogFormAnn);
                const announcement = encodeURIComponent(formData.get("announcement"));
                const url = `${window.location.href}?announcement=${announcement}`;

                fetch(url, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            dialogFormAnn.reset();
                            dialogAnn.style.display = "none";
                            // Optionally update the announcements section
                            // Example: document.getElementById("announcementTable").innerHTML = ...
                        } else {
                            alert('Failed to add announcement.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Failed to add announcement.');
                    });
            });

            dialogFormNews.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                const formData = new FormData(dialogFormNews);
                const news = encodeURIComponent(formData.get("news"));
                const url = `${window.location.href}?news=${news}`;

                fetch(url, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            dialogFormNews.reset();
                            dialogNews.style.display = "none";
                            // Optionally update the news section
                            // Example: document.getElementById("newsTable").innerHTML = ...
                        } else {
                            alert('Failed to add news.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Failed to add news.');
                    });
            });
        });
    </script>
</body>

</html>