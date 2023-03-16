<?php
session_start();
include("admin/config/dbcon.php");
if(isset($_POST['btnlogin']))
{
    $email=$_POST['txtemail'];
    $pass=$_POST['txtpass'];
    $qry="select * from user where email='$email' and pass='$pass'";
    $qry1="select * from admin where aname='$email' and password='$pass'";
    echo $qry1;
    $result = $con->query($qry);
    $count = mysqli_num_rows($result);
    $result1 = $con->query($qry1);
    $count1 = mysqli_num_rows($result1);
    echo $count1;
    if($count>0)
    {
        while($row=$result->fetch_assoc())
        {
            $uid=$row['uid'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $is=$row['is_verified'];
        }
        if($is==1)
        {
           
            $_SESSION['auth']=true;
            $_SESSION['auth_id']=$uid;
            $_SESSION['auth_user']=$fname." ".$lname;
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

    // Admin Login
   
  
    if($count1>0)
    {
        while($row1=$result1->fetch_assoc()){
            $aid=$row['aid'];
            $name=$row1['aname'];
            $imgname=$row1['profile_img'];
            $status=$row1['a_status'];
        }
        if($status==1)
        {
            $_SESSION['auth1']=true;
            $_SESSION['auth1_id']=$aid;
            $_SESSION['auth1_user']=$name;
            $_SESSION['auth1_img']=$imgname;
            header("location:admin/index.php");
        }
    }
    else
    {
        echo "Username and password didn't match";
    }
}
?>