
<?php

$con = mysqli_connect("localhost", "root", "", "ecom");

if (!$con) {

    header("Location: ../errors/db.php");
    die();
} else {
}

?>