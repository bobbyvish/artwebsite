<?php
session_start();
session_destroy();
echo "<script>alert('you are logged out')</script>";
header('location:index.php');
?>