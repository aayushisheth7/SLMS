<?php
include('dbconnect.php');
$collegeCode = $_POST['collegeCode']; 
$firstName = $_POST['fname'];
$middleName = $_POST['mname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobileNumber = $_POST['mobileno'];
$languages = implode(",",$_POST['languages']); // Convert array to comma-separated string
$notification = $_POST['notification'];
$position = $_POST['position'];
$permissions = implode(",",); // Convert array to comma-separated string
$emergencyContactName = $_POST['emergencycontactname'];
$emergencyContactNumber = $_POST['emergencycontactnumber'];
$emergencyContactRelation = $_POST['emergencycontactrelation'];
$age = $_POST['age'];
$dateOfBirth = $_POST['dob'];
$address = $_POST['address'];

// File upload
$profileImage = basename($_FILES["profileImage"]["name"]);
$targetDirectory = "uploads/";
$targetFile = $targetDirectory . $profileImage;
move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile);

// Insert data into database
$sql = "INSERT INTO `admin_reg` (`collegeCode`, `fname`, `mname`, `lname`, `email`, `gender`, `mobileno`, `languages[]`, `notification`, `position`, `permissions[]`, `emergencycontactname`, `emergencycontactnumber`, `emergencycontactrelation`, `age`, `dob`, `address`, `profileImage`) 
        VALUES ('$collegeCode','$firstName','$middleName','$lastName','$email','$gender','$mobileNumber','$languages','$notification','$position','$permissions','$emergencyContactName','$emergencyContactNumber','$emergencyContactRelation','$age','$dateOfBirth','$address','$profileImage')";

$insert=mysqli_query($conn,$sql);
if ($insert) {
    // Registration successful, redirect to student dashboard
    header("Location: ../../admin/admin_dashboard.php");
    exit();
} else {  
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>