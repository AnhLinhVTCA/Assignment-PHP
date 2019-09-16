<?php
require("../mysqli_connect.php");
if (isset($_POST["Login"])) {
    $select = "select * from users";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($emailErr !==  "" || $pwErr != "") {
                // code...
            } elseif ($row["email"] === $_POST["email"] && password_verify($_POST["pw"], $row["password"])) {
                session_start();
                $_SESSION["email"] = $row["email"];
                if ($row["user_level"] == 1) {
                    header("Location: ../Admin/Admin.php");
                } else {
                    header("Location: ../Users/Users.php");
                }
            } else {
                $hihiErr = "The email or password that you've entered is incorrect.";
            }
        }
        $conn->close();
    }
}
