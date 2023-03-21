<?php
session_start();
include("admin/config/dbcon.php");
if (isset($_SESSION['auth'])) {
         
    if (isset($_POST['btncheckout'])) {
        $name = $_POST['txtname'];
        $address = $_POST['txtadd'];
        $pincode = $_POST['txtpin'];
        $select = $_POST['txtsel'];
        $uname=$_SESSION['auth_user'];
        $qry = "INSERT INTO `orders`(`name`,`user_name`, `address`, `pincode`,`payment_method`) VALUES ('$name','$uname','$address','$pincode','$select')";
        $result = $con->query($qry);
        if ($result) {
            if (isset($_SESSION['cart'])) {
                $order_id = mysqli_insert_id($con);
                foreach ($_SESSION['cart'] as $key => $value) {
                    $item_name = $value['name'];
                    $qty = $value['quantity'];
                    $price = $value['price'] * $value['quantity'];
                    $image=$value['image'];
                    $qry = "INSERT INTO `order_item`(`order_id`, `item_name`, `qty`, `price`,`pimage`) VALUES ('$order_id','$item_name','$qty','$price','$image')";
                    $result = $con->query($qry);
                }
                header("location:index.php");
                unset($_SESSION['cart']);
            } else {
                echo "Cart is empty";
            }
        }
    }
}
else{
    echo"AS";
}
?>