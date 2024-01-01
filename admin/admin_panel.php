<?php
session_start();
include("../connection.php");
include("sessions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Panel || Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="imgs/icon.ico" type="image/x-icon">
</head>
<body>
    <div class="admin-container">
        <!-- left container starts here -->
        <div class="left-container">

        <?php
            include("sidebar.php");
        ?>

        </div>
        <!-- left container ends here -->

        <!-- right container starts here -->
        <div class="right-container">

            <div class="title-container">
                <h1>Dashboard</h1>
                <div class="line"></div>
            </div>

            <div class="container-content">

            </div>

        </div>
        <!-- right container ends here -->


    </div>
</body>
</html>