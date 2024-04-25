
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Check if a user type is selected
    if (isset($_POST['box'])) {
        // Redirect based on the selected user type
        switch ($_POST['box']) {
            case 'stud':
                header('Location: ../../student_form.html');
                break;
            case 'faculty':
                header('Location: ../../faculty_form.html');
                break;
            case 'admin':
                header('Location: ../../admin_form.html');
                break;
            case 'princi':
                header('Location: ../../principal_form.html');
                break;
            default:
                // Default redirection or error handling
                header("Location: error.php");
                break;
        }
    } else {
        // If no user type is selected, redirect to an error page or handle it accordingly
        header("Location: error.php");
    }
} else {
    // If the form is not submitted via POST method, redirect to an error page or handle it accordingly
    header("Location: error.php");
}
?>
