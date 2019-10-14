<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["productname"])) {
        $product_name_err = "Product name is not empty!";
    } else {
        $product_name = test_input($_POST["productname"]);
        if (!preg_match("/^[a-zA-Z0-9-_() ]*$/", $product_name)) {
            $product_name_err = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["price"])) {
        $price_err = "Price is not empty!";
    } else {
        $price = test_input($_POST["price"]);
        if (preg_match("/^[0-9]+(\.[0-9]{2})?$/", $price)) {
            $price_err = "Invalid Price form";
        }
    }
    if (empty($_POST["discount"])) {
        $discount_err = "Discount is not empty!";
    } else {
        $discount = test_input($_POST["discount"]);
        if (!preg_match("/^[0-9]*$/", $price)) {
            $discount_err = "Only numbers allowed";
        }
        elseif (0 > $_POST["discount"] > 100) {
            $discount_err = "Discount between 0 and 100";
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
