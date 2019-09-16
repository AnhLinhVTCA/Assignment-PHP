<?php
if ($_SESSION["email"] !== null) {
    require("../mysqli_connect.php");
    $select = "select * from users";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td><a href='Edit/Edit-Profile.php?id= " . $row["id"] . "'>Edit</a></td><td><a href='Delete/Delete-Account.php?id= " . $row["id"] . "' onclick='return checkdelete()'>Delete</a></td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . date("d-m-Y", strtotime($row["registration_date"])) . "</td></tr>";
        }
    }
} else {
    header("Location: ../Login/Login.php");
}
