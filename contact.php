<?php
include("connection.php");
?>

<?php
if(isset($_POST['contact'])){
    $contact_name=$_POST['contact_name'];
    $contact_email=$_POST['contact_email'];
    $contact_subject=$_POST['contact_subject'];
    $contact_message=$_POST['contact_message'];

    $insert=$con->query("INSERT INTO `contacts` VALUES('','$contact_name','$contact_email','$contact_subject','$contact_message')");

    if($insert){
        header("location:index.php?msg=message sent successfully...");
    }
    else{
        echo
        '
        <center>
        <div class="error">
            <p>Failed to send message...</p>
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
    <link rel="stylesheet" href="style.css">
    <title>Blog Website - About</title>
    <link rel="shortcut icon" href="imgs/icon.ico" type="image/x-icon">
</head>
<body>
<div class="main-container">

<?php
include("header.php");
?>

<section>

        <div class="contact">

            <div class="title">
                <h1>Contact Us</h1>
                <div class="line"></div>
            </div>

            <form action="" method="post">

                <label>Name:</label>
                <input type="text" name="contact_name" placeholder="Enter your name..." required>

                <label>Email:</label>
                <input type="email" name="contact_email" placeholder="Enter your email..." required>

                <label>Subject:</label>
                <input type="text" name="contact_subject" placeholder="Enter your subject..." required>

                <label>Message:</label>
                <textarea name="contact_message" placeholder="Enter your Message..."></textarea>

                <button type="submit" name="contact">Contact Us</button>

            </form>

        </div>

</section>

<footer>
    <p></p>
</footer>

</div>


</body>
</html>
