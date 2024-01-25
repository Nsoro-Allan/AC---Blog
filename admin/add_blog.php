<?php
session_start();
include("../connection.php");
include("sessions.php")
?>

<?php
if(isset($_POST['submit'])){
    $blog_image = mysqli_real_escape_string($con, $_POST['blog_image']);
    $blog_title = mysqli_real_escape_string($con, $_POST['blog_title']);
    $blog_author = mysqli_real_escape_string($con, $_POST['blog_author']);
    $blog_date = mysqli_real_escape_string($con, $_POST['blog_date']);
    $blog_description = mysqli_real_escape_string($con, $_POST['blog_description']);

    // File Upload Logic
    if(isset($_FILES['blog_image']) && !empty($_FILES['blog_image']['name'])) {
        $target_folder = "uploads/";
        $blog_image = $_FILES['blog_image']['name'];
        $target_path = $target_folder . $blog_image;

        // Move the uploaded file to the target folder
        if(move_uploaded_file($_FILES['blog_image']['tmp_name'], $target_path)) {
            
            $insert=$con->query("INSERT INTO `blog` VALUES('','$blog_image','$blog_title','$blog_author','$blog_date','$blog_description')");

            if($insert){
                header("location:available_blogs.php?msg=Added New Blog");
            }
            else{
                echo
                '
                <center>
                <div class="error">
                    <p>failed to create new blog.</p>
                </div>
                </center>
                ';
            }

        } else {
            echo '<center><div class="error"><p>Failed to upload blog image...</p></div></center>';
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Panel || Add Blog</title>
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
                <h1>Add a Blog</h1>
                <div class="line"></div>
            </div>

            <div class="container-content">

                <form action="" method="POST"  enctype="multipart/form-data">

                <div class="content">
                    <label>Blog Image:</label>
                    <input type="file" name="blog_image" accept="image/*" required>

                    <label>Blog Title:</label>
                    <input type="text" name="blog_title" placeholder="Enter your Blog Title..." required>

                    <label>Blog Author:</label>
                    <input type="text" name="blog_author" placeholder="Enter your Blog Author..." required>

                    <label>Blog Date:</label>
                    <input type="date" name="blog_date" required>

                    <label>Blog Description:</label>
                    <textarea name="blog_description" placeholder="Enter your Blog Description..."></textarea>

                    <button type="submit" name="submit">Add Blog</button>

                </div>

                </form>

            </div>

        </div>
        <!-- right container ends here -->


    </div>
</body>
</html>