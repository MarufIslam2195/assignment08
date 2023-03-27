<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Validation checks
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Please fill all the fields.";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
    }
    else if($password != $confirm_password) {
        echo "Passwords do not match.";
    }
    else {
        //All validation checks passed
        //Process the registration data and redirect to welcome page
        //Code to insert data into database or any other action as required
        header("Location: welcome.php?fname=$fname");
        exit();
    }
}
?>