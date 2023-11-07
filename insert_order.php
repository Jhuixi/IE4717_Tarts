<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productid']) && isset($_POST['quantity']) && isset($_POST['productname']) && isset($_POST['price'])) {
    $productid = $_POST['productid'];
    $quantity = intval($_POST['quantity']);
    $productname = strval($_POST['productname']);
    $price = floatval($_POST['price']);
    // $totalprice = $price * $quantity;

    // Add var_dump to check the input
    // echo 'Input Data:';
    // var_dump($_POST);

    if (!isset($_SESSION['order'])) {
        $_SESSION['order'] = array();
    }

    $_SESSION['order'][$productid] = array(
        'productid' => $productid,
        'productname' => $productname,
        'price' => $price,
        'quantity' => $quantity
    );

    $subtotal = 0;
      foreach ($_SESSION['order'] as $item) {
          $subtotal += $item['price'] * $item['quantity'];
      }
      echo 'Subtotal: $' . number_format($subtotal, 2);

    // Output the session data for testing
    // echo 'Using var_dump:';
    var_dump($_SESSION);

    // Redirect back to the previous page or wherever you want to go
    // header("Location: checkOut.php");
    // echo '<script>
    //     window.location.href = document.referrer; // Redirect to the previous page
    //     alert("Item has been added to the cart."); // Display an alert
    // </script>';

    exit();
}

elseif($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productid']) && isset($_POST['quantity']) && isset($_POST['price'])) {
    $productid = $_POST['productid'];
    $quantity = intval($_POST['quantity']);
    // $productname = strval($_POST['productname']);
    $price = floatval($_POST['price']);
    // $totalprice = $price * $quantity;

    // Add var_dump to check the input
    // echo 'Input Data:';
    // var_dump($_POST);

    if (isset($_SESSION['order'][$productid])) {
    // Item is already in the cart, update the quantity
    $_SESSION['order'][$productid]['quantity'] += $quantity;
    }

    $subtotal += $item['price'] * $item['quantity'];

      echo 'Subtotal: $' . number_format($subtotal, 2);

    // Output the session data for testing
    // echo 'Using var_dump:';
    var_dump($_SESSION);

    // Redirect back to the previous page or wherever you want to go
    header("Location: checkOut.php");

    exit();
}
?>
