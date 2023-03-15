<?php
session_start();
include("admin/config/dbcon.php");
if(isset($_GET['email']))
{
    $token=$_GET['token'];
    $email=$_GET['email'];
    $qry="select * from user where token='$token' and is_verified='0'";
    $result=$con->query($qry);
    if(mysqli_num_rows($result)>0)
    {
        $row=$result->fetch_assoc();
        if($row['is_verified']==0)
        {
            $qry1="UPDATE `user` SET `is_verified`='1' where email='$email'";
            $result1=$con->query($qry1);
            $_SESSION['message']="Your Email verification is complete";
            header("location:login.php");
        }
    }
    else
    {
        $_SESSION['message']="Email is not been verified";
    }
}
?>