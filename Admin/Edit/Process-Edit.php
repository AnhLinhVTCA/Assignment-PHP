<?php
require("../../mysqli_connect.php");
session_start();
if ($_SESSION["email"] !== null) {
    try {
        $id = $_GET["id"];
        $select = "select * from users where id = " . $id;
        $result = mysqli_query($conn, $select);
        $row = $result->fetch_assoc();
        $fname = $row["first_name"];
        $lname = $row["last_name"];
        $email = $row["email"];
    } catch (Exception $ex) {
        echo "Error" . $ex;
    }
} else {
    header("Location: ../../Login/Login.php");
}
if (isset($_POST["update"])) {
    if ($fnameErr1 !== "" || $lnameErr1 !== "" || $emailErr1 !== "") {
        # code...
    } else {
        $sql = "update users set first_name = '" . $_POST["fname"] . "', last_name = '" . $_POST["lname"] . "', email = '" . $_POST["email"] . "' where id = " . $id;
        if (mysqli_query($conn, $sql) === true) {
            header("Location: ../Admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
if (isset($_POST["return"])) {
    header("Location: ../Admin.php");
}
