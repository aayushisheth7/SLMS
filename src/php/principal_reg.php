<?php
include('dbconnect.php');
$collegeCode = $_POST['college code']; 
    $firstName = $_POST['fname'];
    $middleName = $_POST['mname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobileNumber = $_POST['mobileno'];
    $qualification = $_POST['qualification'];
    $position = $_POST['position'];
    $previousPosition = $_POST['previous']; 
    $expertise = $_POST['expertise'];
    $experience = $_POST['experience'];
    $goals = $_POST['goals'];
    $emergencyContactName = $_POST['emergencycontactname'];
    $emergencyContactNumber = $_POST['emergencycontactnumber'];
    $emergencyContactRelation = $_POST['emergencycontactrelation'];
    $age = $_POST['age'];
    $dateOfBirth = $_POST['dob'];
    $address = $_POST['address'];
    $profileImage = basename($_FILES["profileImage"]["name"]);

    // File upload
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . $profileImage;
    move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile);

    // Insert data into database
    $sql = "INSERT INTO `princi_reg` (`college code`, `fname`, `mname`, `lname`, `email`, `gender`, `mobileno`, `qualification`, `position`, `previous`, `expertise`, `experience`, `goals`, `emergencycontactname`, `emergencycontactnumber`, `emergencycontactrelation`, `age`, `dob`, `address`, `profileImage`) 
            VALUES ('$collegeCode','$firstName','$middleName','$lastName','$email','$gender','$mobileNumber','$qualification','$position','$previousPosition','$expertise','$experience','$goals','$emergencyContactName','$emergencyContactNumber','$emergencyContactRelation','$age','$dateOfBirth','$address','$profileImage')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to principal dashboard
        header("Location: principal_home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();

?>