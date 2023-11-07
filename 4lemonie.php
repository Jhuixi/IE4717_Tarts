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

<html>
<head>
    <title>Tarts</title>
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
    <div class="wrapper">
        <div class="background_box">
            <div class="heading"></div>
            <div class="row1">
                <div class="image_box">
                    <img src="images/choco.jpg" id="product_imgs">
                </div>
                <form action="insert_order.php" method="POST">
                    <div class="text_box">
                        <div class="text_content">
                            <h1>Lemonie Blossom</h1>
                            <h4>$6.80</h4>
                            <p>This exquisite dessert is renowned for its luxurious, silky texture and a flavour that's a true delight for chocolate aficionados. Crafted with a crumbly, buttery pastry base, it showcases a perfect balance with its rich, creamy chocolate filling. The taste experience harmonizes sweetness with deep, cocoa-infused notes, delivering a lasting sensation of premium indulgence. Garnished with a delicate dusting of cocoa powder and a scattering of vibrant raspberries, our chocolate tart is a sensory masterpiece, skillfully uniting flavours and textures that will captivate your discerning palate.</p>
                        </div>
                        <div class="box_addtocart">
                            <input type="hidden" name="productid" id="productid" value="4">
                            <input type="hidden" name="productname" id="productname" value="Lemonie Blossom">
                            <input type="hidden" name="price" id="price" value="$6.80">
                            <input type="submit" name="order" id="addtocart" value="Add to Cart">
                            <input type="number" name="quantity" id="quantity" value="0" min="1">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer-component></footer-component>
</body>
</html>
