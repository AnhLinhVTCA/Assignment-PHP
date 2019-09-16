<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<?php
$fnameErr = $lnameErr = $emailErr = $pwErr = $re_pwErr = $hihiErr = "";
include("Process-Register.php");
include("Check-Input.php");
?>

<body>
    <div class="title">
        <h1>Register</h1>
    </div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form">
            <label for="">Firstname</label><br>
            <input type="text" name="fname">
            <span class="error"><?php echo $fnameErr; ?></span><br>
            <label for="">Lastname</label><br>
            <input type="text" name="lname">
            <span class="error"><?php echo $lnameErr; ?></span><br>
            <label for="">Email</label><br>
            <input type="email" name="email">
            <span class="error"><?php echo $emailErr; ?></span><br>
            <label for="">Password</label><br>
            <input type="password" name="pw">
            <span class="error"><?php echo $pwErr; ?></span><br>
            <label for="">Re-Password</label><br>
            <input type="password" name="re-pw">
            <span class="error"><?php echo $re_pwErr; ?></span><br>
        </div>
        <input type="submit" name="register" value="Register">
        <a href="../Login/Login.php">You had account</a>
        <span class="error"><?php echo $hihiErr; ?></span><br>
    </form>
</body>

</html>