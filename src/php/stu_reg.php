<?php
include('dbconnect.php');


// Fetch data from the registration form
$enrollment = $_POST['enrollment'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$aadharcard = $_POST['aadharcard'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$parentname = $_POST['parentname'];
$parentno = $_POST['parentno'];
$emergencycontactname = $_POST['emergencycontactname'];
$emergencycontactnumber = $_POST['emergencycontactnumber'];
$emergencycontactrelation = $_POST['emergencycontactrelation'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$address = $_POST['address'];

// SQL query to insert student data into the database
/*$sql = "INSERT INTO student_reg (enrollment, fname, mname, lname, aadharcard, course, gender, mobileno, email, parentname, parentno, emergencycontactname, emergencycontactnumber, emergencycontactrelation, age, dob, address)
        VALUES ('$enrollment', '$fname', '$mname', '$lname', '$aadharcard', '$course', '$gender', '$mobileno', '$email', '$parentname', '$parentno', '$emergencycontactname', '$emergencycontactnumber', '$emergencycontactrelation', '$age', '$dob', '$address')";*/
        $sql="INSERT INTO `student_reg`(`enrollment`, `fname`, `mname`, `lname`, `aadharcard`, `course`, `gender`, `mobileno`, `email`, `parentname`, `parentno`, `emergencycontactname`, `emergencycontactnumber`, `emergencycontactrelation`, `age`, `dob`, `address`) VALUES ('$enrollment', '$fname', '$mname', '$lname', '$aadharcard', '$course', '$gender', '$mobileno', '$email', '$parentname', '$parentno', '$emergencycontactname', '$emergencycontactnumber', '$emergencycontactrelation', '$age', '$dob', '$address')";
$insert=mysqli_query($conn,$sql);
if ($insert) {
    // Registration successful, redirect to student dashboard
    header("Location: student_home.php");
    exit();
} else {  
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>