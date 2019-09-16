<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="JavaScrip.js"></script>
    <title>Home-Page</title>
</head>
<?php include("../Logout/Process-Logout.php") ?>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="header">
            <div class="content">
                <h1>Admin Control Panel</h1>
                <h2>Registered Users</h2>
            </div>
            <input type="submit" name="Logout" value="Logout">
        </div>
        <table>
            <tr>
                <th>Edit</th>
                <th>Delete</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Registered Date</th>
            </tr>
            <tr>
                <?php include("Process.php") ?>
            </tr>
        </table>
    </form>
</body>

</html>