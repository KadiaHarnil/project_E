<?php
session_start();

// session_destroy();
if (isset($_POST['addtocart'])) {
    if (isset($_SESSION['cart'])) {
        $check = array_column($_SESSION['cart'], 'name');
        if (in_array($_POST['txtname'], $check)) {

            echo "<script>alert('Item Already added');
            window.location.href='productdetail.php';
            </script>";
        } else {
            $_SESSION['cart'][] = array(
                'id' => $_POST['txtid'],
                'image' => $_POST['txtimg'],
                'name' => $_POST['txtname'],
                'price' => (int) $_POST['txtprice'],
                'quantity' => (int) $_POST['txtqty']
            );
            header("location:productdetail.php");
        }
    } else {
        $_SESSION['cart'][] = array(
            'id' => $_POST['txtid'],
            'image' => $_POST['txtimg'],
            'name' => $_POST['txtname'],
            'price' => (int) $_POST['txtprice'],
            'quantity' => (int) $_POST['txtqty']
        );
        header("location:productdetail.php");
    }
}

if (isset($_POST['delete'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['name'] == $_POST['txtname']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header("location:addtocart.php");
        }
    }
}
if (isset($_POST['txtqty1'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['name'] == $_POST['txtname']) {
            $_SESSION['cart'][$key]['quantity'] = $_POST['txtqty1'];
            print_r($_SESSION['cart']);
            header("location:addtocart.php");
        }
    }
}
include("includes/scripts.php");
?>