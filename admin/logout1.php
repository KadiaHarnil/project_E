<?php
session_start();
unset($_SESSION['auth1']);
unset($_SESSION['auth1_user']);
unset($_SESSION['auth1_id']);
unset($_SESSION['auth1_img']);
header("location:../alogin.php");
?>