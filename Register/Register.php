<?php
$fnameErr = $lnameErr = $emailErr = $pwErr = $re_pwErr = $hihiErr = "";
$fname = $lname = $email = $pw = $re_pw = "";
include("Process-Register.php");
include("Check-Input.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="../JavaScrips.js"></script>
    <title>Register</title>
    <link rel="icon" sizes="192x192" href="../Image/178f6b924bbee8befb5cf61c9a17a12e.png">
</head>

<body>
    <div class="title">
        <h1>Register</h1>
    </div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form">
            <label for="">Firstname</label><br>
            <input type="text" name="fname" value="<?php echo $fname ?>">
            <span class="error"><?php echo $fnameErr; ?></span><br>
            <label for="">Lastname</label><br>
            <input type="text" name="lname" value="<?php echo $lname ?>">
            <span class="error"><?php echo $lnameErr; ?></span><br>
            <label for="">Email</label><br>
            <input type="email" name="email" value="<?php echo $email ?>">
            <span class="error"><?php echo $emailErr; ?></span><br>
            <label for="">Password</label><br>
            <input type="password" name="pw" id="pass" value="<?php echo $pw ?>">
            <span class="error"><?php echo $pwErr; ?></span><br>
            <label for="">Re-Password</label><br>
            <input type="password" name="re-pw" id="pass2" onkeyup="ConfirmPW()" value="<?php echo $re_pw ?>">
            <span class="error"><?php echo $re_pwErr; ?></span><br>
            <span id="errPass">Invalid Password</span><br>
        </div>
        <input type="submit" name="register" value="Register" style="cursor: pointer">
        <a href="../Index.php">You had account?</a>
        <span class="error"><?php echo $hihiErr; ?></span><br>
    </form>
</body>

</html>