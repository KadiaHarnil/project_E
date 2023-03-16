<?php
session_start();
unset($_SESSION['auth']);
unset($_SESSION['auth_id']);
unset($_SESSION['auth-user']);
header("location:index.php");
?>