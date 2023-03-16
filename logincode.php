<?php
session_start();
include("admin/config/dbcon.php");
if(isset($_POST['btnlogin']))
{
    $email=$_POST['txtemail'];
    $pass=$_POST['txtpass'];
    $qry="select * from user where email='$email' and pass='$pass'";
    $result=$con->query($qry);
    if(mysqli_num_rows($result)>0)
    {
        $row=$result->fetch_assoc();
        if($row['is_verified']==1)
        {
           
            $_SESSION['auth']=true;
            $_SESSION['auth_id']=$row['uid'];
            $_SESSION['auth_user']=$row['fname']." ".$row['lname'];
            $_SESSION['message1']="Login Successfull";
            header("location:index.php");
            exit();
        }
        else
        {
            $_SESSION['message']="Your Email Has Not Been Verified! Plzz Check Your Mail To Verify";
            header("location:login.php");
        }
    }
    else
    {
        $_SESSION['message']="Email or Password didn't match";
    }
}
?>