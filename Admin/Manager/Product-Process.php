<?php
if ($_SESSION["email"] !== null) {
    $query = "select * from LinhNA_Products";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["product_name"] . "</td><td><img src='../../" . $row["product_image"] . "' alt='" . $row["product_name"] . "' width='50px''></td><td>" . $row["price"] . " VNĐ</td><td>" . $row["product_discount"] . "%</td><td><a href='../Edit/Edit-Product/Edit-Product.php?productid=" . $row["product_id"] . "'>Edit</a></td><td><a href='../Delete/Delete-Account.php?productid=" . $row["product_id"] . "' onclick='return checkdelete()'>Delete</a></td></tr>";
        }
    }
} else {
    header("Location:../../Index.php");
}
