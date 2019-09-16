<?php
require("../../mysqli_connect.php");
$id = $_GET["id"];
$sql = "delete from users where id = " . $id;
if (mysqli_query($conn, $sql) === true) {
    header("Location: ../Admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
