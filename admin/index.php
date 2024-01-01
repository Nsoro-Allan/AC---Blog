<?php
session_start();
include("../connection.php");

if(isset($_POST['login'])){
    $admin_email=mysqli_real_escape_string($con, $_POST['admin_email']);
    $admin_password=mysqli_real_escape_string($con, $_POST['admin_password']);

    $login=$con->query("SELECT * FROM admin WHERE admin_email='$admin_email' AND admin_password='$admin_password'");

    if($row=$login->fetch_assoc()){
        $_SESSION['admin_email']=$admin_email;
        header("location:admin_panel.php");
    }

    else{
        echo
        '
        <center>
        <div class="error">
            <p>you have entered invalid username or password...</p>
        </div>
        </center>
        ';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="imgs/icon.ico" type="image/x-icon">
</head>
<body>
    <div class="main-container">

        <div class="login-form">

            <form action="" method="post">

                <div class="title">
                    <h1>Admin - Login</h1>
                    <div class="line"></div>
                </div>

                <div class="content">

                    <label>Admin Email:</label>
                    <input type="email" name="admin_email" placeholder="Enter your email..." required>

                    <label>Admin Password:</label>
                    <input type="password" name="admin_password" placeholder="Enter your password..." required>

                    <button type="submit" name="login">Login</button>

                </div>

            </form>

        </div>

    </div>
</body>
</html>