<?php
include("../../Logout/Process-Logout.php");
if (isset($_POST["product"])) {
    header("Location:../Product/Product.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <script src="../../JavaScrips.js"></script>
    <title>HomePage</title>
</head>

<body>
    <div class="fl-left">
        <div class="tab">
            <button class="tablinks active" onclick="openTabs(event,'Registered')" id="defaultOpen">Registered Users</button>
            <button class="tablinks" onclick="openTabs(event,'Products')">Products</button>
        </div>
    </div>
    <div class="fl-right">
        <div class="header">
            <div class="content">
                <h1>Admin Control Panel</h1>
            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="submit" name="Logout" value="Logout" id="logout">
            </form>
        </div>
        <div id="Registered" class="tabcontent">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <table>
                    <h1>Registered Users</h1>
                    <tr>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Registered Date</th>
                    </tr>
                    <?php include("Users-Process.php") ?>
                </table>
            </form>
        </div>
        <div id="Products" class="tabcontent">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <table>
                    <div class="header">
                        <h1 id="pd">Products</h1>
                        <input type="submit" name="product" value="Insert Product" id="ip">
                    </div>
                    <tr>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <?php include("Product-Process.php") ?>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>