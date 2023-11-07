<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productid']) && isset($_POST['quantity']) && isset($_POST['productname']) && isset($_POST['price'])) {
    $productid = $_POST['productid'];
    $quantity = intval($_POST['quantity']);
    $productname = $_POST['productname'];
    $price = floatval($_POST['price']);
    // $totalprice = $price * $quantity;

    // Add var_dump to check the input
    echo 'Input Data:';
    var_dump($_POST);

    if (!isset($_SESSION['order'])) {
        $_SESSION['order'] = array();
    }
    
    $_SESSION['order'][$productid] = array(
        'productid' => $productid,
        'productname' => $productname,
        'price' => $price,
        'quantity' => $quantity
    );

    // if (!isset($_SESSION['order'][$productid])) {
    //     $_SESSION['order'][$productid] = [
    //         'productname' => $productname,
    //         'price' => $price,
    //         'quantity' => $quantity
    //     ];
    // } else {
    //     $_SESSION['order'][$productid] += [
    //         'productname' => $productname,
    //         'price' => $price,
    //         'quantity' => $quantity
    //     ];
    // }

    // Output the session data for testing
    echo 'Using var_dump:';
    var_dump($_SESSION);

    // Redirect back to the previous page or wherever you want to go
    // header("Location: checkOut.php");
    // echo '<script>
    //     window.location.href = document.referrer; // Redirect to the previous page
    //     alert("Item has been added to the cart."); // Display an alert
    // </script>';

    exit();
}
?>
