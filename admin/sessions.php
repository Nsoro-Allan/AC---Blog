<?php

if(!isset($_SESSION['admin_email'])){
    header("location:index.php?msg=Login first");
    exit;
}

?>