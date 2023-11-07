<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productid']) && isset($_POST['quantity'])) {
    $productid = $_POST['productid'];
    $quantity = $_POST['quantity'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];

    // $cartitem = array(
    //     "productid" => $productid,
    //     "productname" => $productname,
    //     "price" => $price,
    //     "qty" => $qty
    // );
    
    // $_SESSION['cart'][] = $cartitem;

    // Add var_dump to check the input
    echo 'Input Data:';
    var_dump($_POST);

    if (!isset($_SESSION['order'])) {
        $_SESSION['order'] = array();
    }

    if (!isset($_SESSION['order'][$productid])) {
        $_SESSION['order'][$productid] = $quantity;
    } else {
        $_SESSION['order'][$productid] = $quantity;
    }

    // Output the session data for testing
    echo 'Using var_dump:';
    var_dump($_SESSION);

    // Redirect back to the previous page or wherever you want to go
    header("Location: index.html");
    exit();
}
?>
