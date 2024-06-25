<?php
include('../src/php/dbconnect.php');
include('../src/php/placement.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $placement = new Placement($conn);
    $result = $placement->addPlacement($_POST['name'], $_POST['detail'], $_POST['view'], $_POST['apply']);
    // header('Content-Type: application/json');
    // if ($result) {
    //     echo json_encode(['status' => 'success']);
    // } else {
    //     echo json_encode(['status' => 'error']);
    // }
}

$data = new Placement($conn);
$result = $data->getPlacement();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/faculty_placement.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Training/Placement</title>
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
                <i><a href="faculty_noticeboard.php"><img src="/src/img/icons/note text.svg" alt=""></a>
                    <li><a href="faculty_noticeboard.php">Noticeboard</a><span>Noticeboard</span></li>
                </i>
                <i><a href="faculty_progress.php"><img src="/src/img/icons/document.svg" alt=""></a>
                    <li><a href="faculty_progress.php">Module</a><span>Module</span></li>
                </i>
                <i class="active"><a href="faculty_placement.php"><img src="/src/img/icons/briefcase_active.svg" alt=""></a>
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

    <section class="content">
        <h1 style="color: #9C50CA; margin-left: 10px;">They are on campus !!</h1>
        <button id="addNewAnn" class="button" style="margin-left: 10px;">Add New</button>
        <?php
        $num = $result->num_rows;
        if($num>0){
            while($row = $result->fetch_assoc()){
                extract($row);
                echo "<div class=\"placement\" style=\"margin-top: 20px;\">";
                echo " <h3>$name</h3>";
                echo "<p> $detail</p>";
                echo "<a href=\"$view\" class=\"button\">View</a>";
                echo "<a href=\"$apply\" class=\"button\">Apply</a>";
                echo "</div>";
            }
        }
        ?>
        <!-- <div class="placement" style="margin-top: 20px;">
            <h3>TechSoft</h3>
            <p>We are product base company and we are hiring for Php and frontend developer </p>
            <p class="applied">Applied by: 30 student</p>
            <a href="#" class="button">View</a>
          </div> -->
        </section>
        <div id="dialogAnn" class="dialog" style="display:none;">
        <h2>Add Announcement</h2>
        <form id="dialogFormAnn">
        <input type="text" name="name" placeholder="Company Name" required><br>
            <textarea name="detail" placeholder="Details" required></textarea><br>
            <input type="url" name="view" placeholder="View Link" required><br>
            <input type="url" name="apply" placeholder="Apply Link" required><br>
            <button type="submit" style="margin-top: 5px;">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dialogAnn = document.getElementById("dialogAnn");
            const dialogFormAnn = document.getElementById("dialogFormAnn");

            document.getElementById("addNewAnn").addEventListener("click", function() {
                dialogAnn.style.display = "block";
            });

            dialogFormAnn.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // const formData = new FormData(dialogFormAnn);
                // const announcement = encodeURIComponent(formData.get("announcement"));
                // const url = `${window.location.href}?announcement=${announcement}`;
                // const name = encodeURIComponent(formData.get("name"));
                // const detail = encodeURIComponent(formData.get("detail"));
                // const view = encodeURIComponent(formData.get("view"));
                // const apply = encodeURIComponent(formData.get("apply"));

                const formData = new FormData(dialogFormAnn);


                fetch('faculty_placement.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            dialogFormAnn.reset();
                            dialogAnn.style.display = "none";
                            // Optionally update the announcements section
                            // Example: document.getElementById("announcementTable").innerHTML = ...
                        } else {
                            dialogFormAnn.reset();
                            alert('Failed to add announcement.');
                        }
                    })
                    .catch(error => {
                        dialogFormAnn.reset();
                        dialogAnn.style.display = "none";
                        // alert('Failed to add announcement.');
                    });
            });
        });
    </script>
</body>

</html>
