<?php
include("config/dbcon.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $qry="DELETE FROM `user` WHERE uid='$id'";
    $result=$con->query($qry);
    if($result)
    {
        header("location:index.php");
    }
    else
    {
        header("location:index.php");
    }
}
?>