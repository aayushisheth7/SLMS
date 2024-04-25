<?php
include('dbconnect.php');
$collegeCode = $_POST['collegeCode']; 
$firstName = $_POST['fname'];
$middleName = $_POST['mname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobileNumber = $_POST['mobileno'];
$qualification = $_POST['qualification'];
$position = $_POST['position'];
$teachingExperience = $_POST['experience'];
$expertise = $_POST['expertise'];
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
$sql = "INSERT INTO `faculty_reg` (`collegeCode`, `fname`, `mname`, `lname`, `email`, `gender`, `mobileno`, `qualification`, `position`, `experience`, `expertise`, `emergencycontactname`, `emergencycontactnumber`, `emergencycontactrelation`, `age`, `dob`, `address`, `profileImage`) 
        VALUES ('$collegeCode','$firstName','$middleName','$lastName','$email','$gender','$mobileNumber','$qualification','$position','$teachingExperience','$expertise','$emergencyContactName','$emergencyContactNumber','$emergencyContactRelation','$age','$dateOfBirth','$address','$profileImage')";

if ($conn->query($sql) === TRUE) {
    // Redirect to faculty dashboard
    header("Location: ../../faculty/faculty_home.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>