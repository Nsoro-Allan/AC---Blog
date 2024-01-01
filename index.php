<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog Website - Home</title>
    <link rel="shortcut icon" href="imgs/icon.ico" type="image/x-icon">
</head>
<body>
<div class="main-container">

<?php
include("header.php");
?>

<section>
    <?php
    $select = $con->query("SELECT * FROM blog ORDER BY blog_id DESC");
    while ($row = mysqli_fetch_array($select)) {

        // Check if the blog description has more than 40 characters
        $blogDescription = $row['blog_description'];
        $maxLength = 200;

        if (strlen($blogDescription) > $maxLength) {
            // If more than 40 characters, trim the text and add a "Read more" link
            $shortDescription = substr($blogDescription, 0, $maxLength) . '...';
        } else {
            // If 40 characters or fewer, use the original text
            $shortDescription = $blogDescription;
        }

        ?>
        <article class="blog-post">
            <input type="hidden" value="<?php echo $row['blog_id']; ?>">
            <img src="./imgs/<?php echo $row['blog_image']; ?>" class="post-image">

            <h2 class="post-title"><?php echo $row['blog_title']; ?></h2>

            <p class="post-meta">Author: <?php echo $row['blog_author']; ?> | Date: <?php echo $row['blog_date']; ?></p>

            <p class="post-content">
                <span class="short-description"><?php echo $shortDescription; ?></span>
            </p>

            <a href="view_blog.php?blog_id=<?php echo $row['blog_id']; ?>" class="read-more">Read more</a>

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
