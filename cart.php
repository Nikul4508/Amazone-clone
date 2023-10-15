
<?php
include 'config.php';
session_start();
//session_destroy();

$pname = $_POST['product_name'];
$pprice = $_POST['product_price'];
$pquantity = $_POST['product_quantity'];
$pimage = $_POST['product_image'];


if (isset($_POST['addcart'])) {

    $_SESSION['cart'][1] = array(
        'productname' => $pname,
        'productimage' => $pimage,
        'productprice' => $pprice,
        'productquantity' => $pquantity,
    );
    header('location:atc.php');
}

if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productname'] === $_POST['product']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:atc.php');
        }
    }
}

if (isset($_POST['removeall'])) {

    unset($_SESSION['cart']);

    header('location: atc.php');
}

?>