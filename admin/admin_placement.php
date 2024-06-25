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
                <i><a href="admin_dashboard.php"><img src="/src/img/icons/deshboard_icon_inactive.svg"></a>
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
                <i class="active"><a href="admin_placement.php"><img src="/src/img/icons/briefcase_active.svg" alt=""></a>
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

    <section class="content">
        <h1 style="color: #9C50CA; margin-left: 10px;">Placements</h1>
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
        <h3>ABC</h3>
            <p> Company: Techsoft</p>
            <p> package: 5 LPA </p>
            <p> CGPA : 8.00</p>
            <p> Branch: Web Frontend</p>
          </div> -->
        </section>
</body>

</html>