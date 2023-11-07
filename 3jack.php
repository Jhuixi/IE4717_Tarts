<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productid']) && isset($_POST['quantity'])) {
    $productid = $_POST['productid'];
    $quantity = $_POST['quantity'];

    // Redirect to another page and pass the values in the URL
    header("Location: insert_order.php");
    exit();
}
?>

<html lang="en">
    <head>
        <title> Tartie Delights </title>
        <link rel="stylesheet" href="css/pdt_detail.css">
        <meta charset="utf-8">
        <script defer src="AboutUs.js"></script>
        <script src="js/header.js" type="text/javascript" defer></script>
        <script src="js/footer.js" type="text/javascript" defer></script>
        <script defer src="js/animation.js"></script>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
       <header-component></header-component>
       <!-- <div class="wrapper"> -->
        <div class="wrapper">
        <div class="background_box">
          <nav class="breadcrumb">
            <ul><a href="allproducts(classie).html">Previous</a></ul>
          </nav>
          <div class="heading">
          </div>
          <div class = "row1">
          <div class = "image_box">
            <img src = "images/3pumpkin.jpeg" id = "product_imgs">
          </div>
          <form action="insert_order.php" method="POST">
          <div class = "text_box">
            <div class="text_content">
              <h1>Jack-o'-lantern</h1>
              <h4>$7.80</h4>
              <p>Indulge in the warmth and coziness of autumn with our enticing pumpkin spice tart, now offered in our shop. This delightful dessert boasts a sublime, velvety texture and a flavor profile that captures the essence of the season. Featuring a delicate, crumbly pastry base, it beautifully complements the rich, spiced pumpkin filling. The taste is a delightful dance of sweetness and aromatic pumpkin spices, leaving a comforting, lingering taste of fall. </p>
          </div>
            <div class="box_addtocart">
              <input type="hidden" name="productid" id="productid" value="3">
              <input type="hidden" name="productname" id="productname" value="Jack-o'-lantern">
              <input type="hidden" name="price" id="price" value="7.80">
              <input type="submit" name="order" id="addtocart" value="Add to Cart">
              <input type="number" name="quantity" id="quantity" value="0" min="1"/>
            </div>
          </form>
          </div>
        </div>
      </div>
        <footer-component></footer-component>

  </body>
</html>
