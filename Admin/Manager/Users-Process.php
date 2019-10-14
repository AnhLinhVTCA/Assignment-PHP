<?php
if ($_SESSION["email"] !== null) {
    require("../../mysqli_connect.php");
    $select = "select * from LinhNA_Users";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] === "admin@gmail.com") {
                echo "<tr><td>Edit</td><td>Delete</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . date("d-m-Y", strtotime($row["registration_date"])) . "</td></tr>";
            } else {
                echo "<tr><td><a href='../Edit/Edit-Profile/Edit-Profile.php?id=" . $row["id"] . "'>Edit</a></td><td><a href='../Delete/Delete-Account.php?id=" . $row["id"] . "' onclick='return checkdelete()'>Delete</a></td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . date("d-m-Y", strtotime($row["registration_date"])) . "</td></tr>";
            }
        }
    }
} else {
    header("Location:../../Index.php");
}
