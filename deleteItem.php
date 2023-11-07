<?php
session_start();

if (isset($_GET['productid'])) {
    $productid = $_GET['productid'];

    if (isset($_SESSION['order']) && isset($_SESSION['order'][$productid])) {
        // Remove the product from the cart
        unset($_SESSION['order'][$productid]);
    }
}

// Redirect back to the checkout page
header("Location: checkOut.php");
exit();
?>
