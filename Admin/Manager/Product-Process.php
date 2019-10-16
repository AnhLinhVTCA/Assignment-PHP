<?php
if ($_SESSION["email"] !== null) {
    $sql = "SELECT * FROM LinhNA_Products ORDER BY Product_id DESC";
    $retval = mysqli_query($conn, $sql);;
    if ($retval->num_rows > 0) {
        while ($row = $retval->fetch_assoc()) {
            echo "<tr><td>" . $row["product_name"] . "</td><td><img src='../../" . $row["product_image"] . "' alt='" . $row["product_name"] . "' width='50px''></td><td>" . number_format($row["price"], 0, "", ".") . " VNĐ</td><td>" . $row["product_discount"] . "%</td><td><a href='../Edit/Edit-Product/Edit-Product.php?productid=" . $row["product_id"] . "'>Edit</a></td><td><a href='../Delete/Delete-Account.php?productid=" . $row["product_id"] . "' onclick='return checkdelete()'>Delete</a></td></tr>";
        }
    }
} else {
    header("Location:../../Index.php");
}
