<?php
require("../../../mysqli_connect.php");
session_start();
if ($_SESSION["email"] !== null) {
    try {
        $select = "select * from LinhNA_Products where product_id =" . $_GET["productid"];
        $result = mysqli_query($conn, $select);
        $row = $result->fetch_assoc();
        $product_name = $row["product_name"];
        $price = $row["price"];
        $image = $row["product_image"];
        $discount = $row["product_discount"];
    } catch (Exception $ex) {
        echo "Error" . $ex;
    }
    if (isset($_POST["update"])) {
        $upload = "Image/Product/" . basename($_FILES["FileToImage"]["name"]);
        $upload_file = "../../../" . $upload = "Image/Product/" . basename($_FILES["FileToImage"]["name"]);
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
            echo "Sorry, your file was not update.</br>";
        } else {
            if ($product_name_err !== "" || $price_err !== "") { } else {
                $sql = "update LinhNA_Products set product_name = '" . $_POST["productname"] . "', price = '" . $_POST["price"] . "', product_image = '" . $upload . "', product_discount = '" . $_POST["discount"] . "' where product_id = " . $_GET["productid"];
                if (mysqli_query($conn, $sql) === true) {
                    if (!file_exists($upload_file)) {
                        move_uploaded_file($_FILES["FileToImage"]["tmp_name"], $upload_file);
                    }
                    header("Location:../../Manager/Admin.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        $conn->close();
    }
} else {
    header("Location: ../../../Index.php");
}
