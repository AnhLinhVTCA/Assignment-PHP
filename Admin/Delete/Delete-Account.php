<?php
require("../../mysqli_connect.php");
$id = $_GET["id"];
$productid = $_GET["productid"];
if ($id !== null) {
    $sql = "delete from LinhNA_Users where id = " . $id;
}
if ($productid !== null) {
    $sql = "delete from LinhNA_Products where product_id = " . $productid;
}
if (mysqli_query($conn, $sql) === true) {
    header("Location:../Manager/Admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
