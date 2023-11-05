<?php
session_start();

$productid = $_POST['productid'];
$productname = $_POST['productname'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$cartitem = array(
    "productid" => $productid,
    "productname" => $productname,
    "price" => $price,
    "qty" => $qty
);

$_SESSION['cart'][] = $cartitem;

header('Location: checkOut.php');
?>
