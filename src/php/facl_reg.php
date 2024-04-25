<?php
include('dbconnect.php');

$collegeCode = $_POST['college code'];
$firstName =  $_POST['fname'];
$middleName =  $_POST['mname'];
$lastName =  $_POST['lname'];
$email =  $_POST['email'];
$gender =  $_POST['gender'];
$mobileNumber = $_POST['mobileno'];
$qualification =  $_POST['qualification'];
$position =  $_POST['position'];
$teachingExperience =  $_POST['experience'];
$expertise =  $_POST['expertise'];
$emergencyContactName =  $_POST['emergencycontactname'];
$emergencyContactNumber =  $_POST['emergencycontactnumber'];
$emergencyContactRelation =  $_POST['emergencycontactrelation'];
$age =  $_POST['age'];
$dateOfBirth =  $_POST['dob'];
$address =  $_POST['address'];

// File upload
$targetDirectory = "uploads/";
$targetFile = $targetDirectory . basename($_FILES["profileImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if file is an actual image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profileImage"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Check file size and format
if ($_FILES["profileImage"]["size"] > 500000 || !in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
        $sql = "INSERT INTO `faculty_reg`(`college code`, `fname`, `mname`, `lname`, `email`, `gender`, `mobileno`, `qualification`, `position`, `experience`, `expertise`, `emergencycontactname`, `emergencycontactnumber`, `emergencycontactrelation`, `age`, `dob`, `address`, `profileImage`) 
                VALUES ('$collegeCode','$firstName','$middleName','$lastName','$email','$gender','$mobileNumber','$qualification','$position','$teachingExperience','$expertise','$emergencyContactName','$emergencyContactNumber','$emergencyContactRelation','$age','$dateOfBirth','$address','$targetFile')";
    
$insert=mysqli_query($conn,$sql);
if ($insert) {
    // Registration successful, redirect to student dashboard
    header("Location: faculty_home.php");
    exit();
} else {  
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
}
$conn->close();

?>
