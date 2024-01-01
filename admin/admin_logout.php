<?php
session_start();
include("../connection.php");

unset($_SESSION['admin_email']);
session_destroy();

header("location:index.php?msg=logged out");
?>