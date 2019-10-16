<?php
require("../mysqli_connect.php");
$rec_limit = 12;
$sql = "SELECT count(product_id) FROM LinhNA_Products";
$retval = mysqli_query($conn, $sql);

if (!$retval) {
    die('Không thể lấy dữ liệu!');
}
$row = mysqli_fetch_array($retval, MYSQLI_NUM);
$rec_count = $row[0];

if (isset($_GET{'page'})) {
    $page = $_GET{'page'} + 1;
    $offset = $rec_limit * $page;
} else {
    $page = 0;
    $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM LinhNA_Products LIMIT $offset, $rec_limit";

$retval = mysqli_query($conn, $sql);;

if (!$retval) {
    die('Không thể lấy dữ liệu!');
}

while ($row = $retval->fetch_assoc()) {
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
                        " . number_format($newprice, 0, "", ".") . " ₫
                            <span class='product__sale-regular'>" . number_format($row["price"], 0, "", ".") . " ₫</span>
                        </span>
                    </span>
                </a>
            </div>";
}