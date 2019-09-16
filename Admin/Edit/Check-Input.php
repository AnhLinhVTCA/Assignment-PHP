<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"]) || empty($_POST["lname"])) {
        $fnameErr1 = "First name is not empty!";
        $lnameErr1 = "Last name is not empty!";
    } else {
        $fname = test_input($_POST["fname"]);
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $fname) || !preg_match("/^[a-zA-Z ]*$/", $lname)) {
            $fnameErr1 = "Only letters and white space allowed";
            $lnameErr1 = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr1 = "Email is not empty!";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr1 = "Invalid email form";
        }
    }
    if (empty($_POST["pw"]) || empty($_POST["re-pw"])) {
        $pwErr1 = "Password is not empty!";
        $re_pwErr1 = "Re-Password is not empty!";
    } else {
        $pw = test_input($_POST["pw"]);
        $re_pw = test_input($_POST["re-pw"]);
        if (strlen($_POST["pw"]) < 6 || strlen($_POST["re-pw"]) < 6) {
            $pwErr1 = "Password must be greater than 6 characters !";
            $re_pwErr1 = " Re-Password must be greater than 6 characters !";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
