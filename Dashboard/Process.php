<?php
require("../mysqli_connect.php");
$query = "select * from LinhNA_Products";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newprice = $row["price"] - ($row["price"] / 100 * $row["product_discount"]);
        echo "<div class='product'>
                <a href='#'>
                    <div class='product__image'>
                        <div class='discount-badge'>-" . $row["product_discount"] . "%</div>
                        <img src='../" . $row["product_image"] . "' alt='" . $row["product_name"] . "'>
                    </div>
                    <div class='product__title'>
                        <i class='icon icon-tikinow'></i>
                        " . $row["product_name"] . "
                    </div>
                    <span class='product__sale'>
                        <span class='product__sale-final'>
                        " . number_format($newprice,0,"",".") . " ₫
                            <span class='product__sale-regular'>" . number_format($row["price"], 0, "",".") . " ₫</span>
                        </span>
                    </span>
                </a>
            </div>";
    }
}
