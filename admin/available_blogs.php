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
    <title>Admin - Panel || Available Blogs</title>
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
                <h1>Available Blogs</h1>
                <div class="line"></div>
            </div>

            <div class="container-content">
                <table>
                    <tr>
                        <th>Blog Image</th>
                        <th>Blog Title</th>
                        <th>Blog Author</th>
                        <th>Blog Date</th>
                        <th>Blog Description</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select=$con->query("SELECT * FROM blog ORDER BY blog_id DESC");
                    while($row=mysqli_fetch_array($select)){

                    ?>    
                    <tr>
                        <td><img src='./uploads/<?php echo $row['blog_img'];?>'></td>

                        <td><?php echo $row['blog_title'];?></td>

                        <td><?php echo $row['blog_author'];?></td>

                        <td><?php echo $row['blog_date'];?></td>

                        <td><textarea rows="6" cols="40" readonly><?php echo $row['blog_description'];?></textarea></td>

                        <td>
                        <div class="actions">
                            <a href="#">Edit Blog</a>
                            <a href="#">Delete Blog</a>
                        </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>

        </div>
        <!-- right container ends here -->


    </div>
</body>
</html>