<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog Website - View Blog</title>
    <link rel="shortcut icon" href="imgs/icon.ico" type="image/x-icon">
</head>
<body>
<div class="main-container">

<?php
include("header.php");
?>

<section>
    <?php
    $blog_id=$_GET['blog_id'];

    $select = $con->query("SELECT * FROM blog WHERE blog_id='$blog_id'");
    while ($row = mysqli_fetch_array($select)) {
    ?>

        <article class="blog-post">
            <input type="hidden" value="<?php echo $row['blog_id']; ?>">
            <img src="./admin/uploads/<?php echo $row['blog_img']; ?>" class="post-image">

            <h2 class="post-title"><?php echo $row['blog_title']; ?></h2>

            <p class="post-meta"><span style="font-weight:bold;">Author:</span> <?php echo $row['blog_author']; ?> | Date: <?php echo $row['blog_date']; ?></p>

            <p class="post-content">
                <span class="short-description"><?php echo $row['blog_description']; ?></span>
            </p>

            <a href="index.php" class="read-more">Back...</a>

        </article>

    <?php
    }
    ?>


</section>

<footer>
    <p></p>
</footer>

</div>


</body>
</html>
