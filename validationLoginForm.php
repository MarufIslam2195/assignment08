<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Validation checks
    if(empty($email) || empty($password)) {
        echo "Please fill all the fields.";
    }
