<?php
require("../mysqli_connect.php");
if (isset($_POST["register"])) {
    $select = "select * from LinhNA_Users";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] === $_POST["email"]) {
                $hihiErr = "Email already exists !";
                break;
            }
        }
        if ($fnameErr !== "" || $lnameErr !== "" || $emailErr !== "" || $pwErr !== "" || $re_pwErr !== "" || strlen($_POST["pw"]) < 6) { } else {
            if ($_POST["email"] === "admin@gmail.com") {
                $sql = "insert into LinhNA_Users(first_name, last_name, email, password, registration_date, user_level)
                        value ('" . ($_POST["fname"]) . "', '" . ($_POST["lname"]) . "', '" . ($_POST["email"]) . "','" . ($hash_pw = password_hash(($_POST["pw"]), PASSWORD_DEFAULT)) . "',NOW(),1)";
                if (mysqli_query($conn, $sql) === true) {
                    header("Location:../Index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $sql = "insert into LinhNA_Users(first_name, last_name, email, password, registration_date, user_level)
                        value ('" . ($_POST["fname"]) . "', '" . ($_POST["lname"]) . "', '" . ($_POST["email"]) . "','" . ($hash_pw = password_hash(($_POST["pw"]), PASSWORD_DEFAULT)) . "',NOW(),0)";
                if (mysqli_query($conn, $sql) === true) {
                    header("Location:../Index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    } else {
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] === $_POST["email"]) {
                $hihiErr = "Email already exists !";
                break;
            }
        }
        if ($fnameErr !== "" || $lnameErr !== "" || $emailErr !== "" || $pwErr !== "" || $re_pwErr !== "" || strlen($_POST["pw"]) < 6 || $hihiErr !== "") { } else {
            if ($_POST["email"] === "admin@gmail.com") {
                $sql = "insert into LinhNA_Users(first_name, last_name, email, password, registration_date, user_level)
                    value ('" . ($_POST["fname"]) . "', '" . ($_POST["lname"]) . "', '" . ($_POST["email"]) . "','" . ($hash_pw = password_hash(($_POST["pw"]), PASSWORD_DEFAULT)) . "',NOW(),1)";
                if (mysqli_query($conn, $sql) === true) {
                    header("Location:../Index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $sql = "insert into LinhNA_Users(first_name, last_name, email, password, registration_date, user_level)
                    value ('" . ($_POST["fname"]) . "', '" . ($_POST["lname"]) . "', '" . ($_POST["email"]) . "','" . ($hash_pw = password_hash(($_POST["pw"]), PASSWORD_DEFAULT)) . "',NOW(),0)";
                if (mysqli_query($conn, $sql) === true) {
                    header("Location:../Index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    }
    $conn->close();
}
