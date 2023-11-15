<?php if (!isset($_SESSION)) session_start();
unset($_SESSION['_login']);
session_destroy();
header('location:index.php');
?>