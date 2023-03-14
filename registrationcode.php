<?php
include("admin/config/dbcon.php");
if (isset($_POST['btnsubmit'])) {
    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $cpass = $_POST['txtcpass'];
    $phno = $_POST['txtphno'];
    if($pass==$cpass)
    {
        $qry="select * from user where email='$email'";
        $result=$con->query($qry);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            $_SESSION['message']="Email Already Exist";
            header("location:login.php");
        }
        else
        {
            $qry1="INSERT INTO `user`(`fname`, `lname`, `pass`, `email`, `upho`) VALUES ('$fname','$lname','$pass','$email','$phno')";
            $result1=$con->query($qry1);
            if($result1)
            {
                $_SESSION['message']= "Register Successfully";
                header("location:login.php");
            }
            else{
                $_SESSION['message']="Failed to Register";
                header("location:registration.php");
            }
        }
    }
    else{
        $_SESSION['message']="Confirm password and password didn't match";
        header("location:registration");
    }
}
?>