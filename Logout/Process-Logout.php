<?php
session_start();
if ($_SESSION["email"] !== null) {
    if (isset($_POST["Logout"])) {
        session_unset();
        session_destroy();
        header("Location:../Index.php");
    }
} else {
    header("Location:../Index.php");
}
