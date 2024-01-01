<header class="sidebar">

<div class="title">
    <h1>Admin Panel</h1>
    <div class="line"></div>
</div>

<div class="link">
    <a href="admin_panel.php"><img src="imgs/dashboard.ico">Dashboard</a>
    <a href="available_blogs.php"><img src="imgs/blogs.ico">Blogs</a>
    <a href="add_blog.php"><img src="imgs/add_blog.ico">Add Blog</a>
    <a href="user_contact.php"><img src="imgs/contacts.ico">Contacts</a>
    <a href="settings.php"><img src="imgs/settings.ico">Settings</a>
</div>

<div class="account">
    <h4><?php echo $_SESSION['admin_email'];?></h4>
    <a href="./admin_logout.php">Logout</a>
</div>

</header>