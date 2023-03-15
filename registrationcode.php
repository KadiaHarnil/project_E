<?php
session_start();
include("admin/config/dbcon.php");
function mail_sent($email,$token){
    $to=$email;
    $sub="E-mail verification mail form company";
    $body="Thanks for Registration!
    Click the link to verify the account
    <a href='http://localhost/project_E/verifymail.php?email=$email&token=$token'>Verify</a>";
    $header=array(
        'From' => 'harnilkadia99@gmail.com',
        'MIME-Versio' =>'1.0',
        'Content-type' => 'text/html; charset=iso-8859-1'
    );
    mail($to,$sub,$body,$header);
}
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
            $token=bin2hex(random_bytes(16));
            $qry1="INSERT INTO `user`(`fname`, `lname`, `pass`, `email`, `upho`,`token`, `is_verified`) VALUES ('$fname','$lname','$pass','$email','$phno','$token','0')";
            $result1=$con->query($qry1);
            if($result1)
            {
                mail_sent($email,$token);
                $_SESSION['message']= "Register Successfully! Check mail for Confirm Registration";
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