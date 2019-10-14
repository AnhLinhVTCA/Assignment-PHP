<?php
require("../../mysqli_connect.php");
if (isset($_POST["upload"])) {
    $upload = "Image/Product/" . basename($_FILES["FileToImage"]["name"]);
    $upload_file = "../../Image/Product/" . basename($_FILES["FileToImage"]["name"]);
    $upload_ok = 1;
    $image_type = strtolower((pathinfo($upload_file, PATHINFO_EXTENSION)));
    $check = getimagesize(($_FILES["FileToImage"]["tmp_name"]));
    if ($check !== false) {
        $upload_ok = 1;
    } else {
        $upload_ok = 0;
    }
    if ($_FILES["FileToImage"]["size"] > 500000) {
        $upload_ok = 0;
    }
    if ($image_type != "jpg" && $image_type != "png" && $image_type != "jpeg") {
        $upload_ok = 0;
    }
    if ($upload_ok == 0) {
        echo "Sorry, your file was not uploaded.</br>";
    } else {
        $query = "insert into LinhNA_Products(product_name, product_image, price, product_discount) value ('" . $_POST["productname"] . "','" . $upload . "','" . $_POST["price"] . "','" . $_POST["discount"] . "');";
        echo $query;
        if (mysqli_query($conn, $query) === true) {
            if (!file_exists($upload_file)) {
                move_uploaded_file($_FILES["FileToImage"]["tmp_name"], $upload_file);
            }
            header("Location:../Manager/Admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
