<?php
include('../src/php/dbconnect.php');
include('../src/php/module.php');

$data = new Module($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="/src/css/student_home.css">
    <link rel="stylesheet" href="/src/css/faculty_modul.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Module</title>
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
                <i class="active"><a href="faculty_progress.php"><img src="/src/img/icons/document_active.svg" alt=""></a>
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
        <section class="previous-module">
            <h2 style="color: #9C50CA; margin-top: 10px;">Previous Module</h2>
            <div class="Module-button">
                <a href="prev_module.html" class="button">sem-1 ></a>
                <a class="button">sem-2 ></a>
                <a class="button">sem-3 ></a>
                <a class="button">sem-4 ></a>
                <a class="button">sem-5 ></a>
                <a class="button">sem-6 ></a>
                <a class="button">sem-7 ></a>
                <a class="button">sem-8 ></a>
            </div>
        </section>
        <section class="add-new">
            <h2 style="color: #9C50CA; margin-top: 10px;">Add New Module</h2>
            <form action="" method="post" class="formModule" enctype="multipart/form-data">
                <fieldset>
                <p>Select Semester</p>
                <select name="sem" id="sem">
                    <option value="none"> </option>
                    <option value="1">sem-1</option>
                    <option value="2">sem-2</option>
                    <option value="3">sem-3</option>
                    <option value="4">sem-4</option>
                    <option value="5">sem-5</option>
                    <option value="6">sem-6</option>
                    <option value="7">sem-7</option>
                    <option value="8">sem-8</option>
                </select>
                </fieldset>

                <fieldset>
                <p>Select Module</p>
                <select name="ModuleName" id="ModuleName">
                    <option value="none"> </option>
                    <option value="Assignmenet">Assignmenet</option>
                    <option value="labs">labs</option>
                    <option value="material">material</option>
                </select>
                </fieldset>

                <fieldset>
                <p>Detail</p>
                <input style="width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #ccc;
    border-radius: 8px;" type="text" name="detail" id="ModuleName"/>
                </fieldset>
                
                
                <fieldset>
                <p>Add file</p>
                <label for="file" id="file-name">Choose file</label>
                <input type="file" name="file" id="file">
                <p id="file-name-display"></p>
                </fieldset>
                <div id="submit-button">
                <input type="submit" value="submit">
            </div>
            </form>

        </section>
    </main>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $data->type = $_POST['ModuleName'];
        $fileName  =  $_FILES['file']['name'];
        $tempPath  =  $_FILES['file']['tmp_name'];
        $fileSize  =  $_FILES['file']['size'];
        // $data->link= $fileName;
        // $data->name = $fileName;
        $upload_path = "../module/";
        move_uploaded_file($tempPath, $upload_path . $fileName);
        $result = $data->setModule($_POST['sem'],$fileName, $_POST['ModuleName'],$fileName,$_POST['detail']);
    }
?>
    <script>
        const fileInput = document.getElementById("file");
        fileInput.addEventListener("change", (event) => {
    const fileName = event.target.files[0].name;    
    console.log("Selected file name:", fileName);
    document.getElementById("file-name-display").textContent = fileName;
    });
    </script>
</body>

</html>