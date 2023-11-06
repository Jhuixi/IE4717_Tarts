<?php
include("connection.php");

if (isset($_GET['product-id'])) {
    $productid = $_GET['product-id'];

    // Fetch the product details based on the product ID
    $sql = "SELECT * FROM tarts WHERE productid = $productid";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umi no Mikaku</title>
    <link rel="stylesheet" href="css/pdt_detail.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300&display=swap" rel="stylesheet">
    <script src="js/header.js" type="text/javascript" defer></script>
    <script src="js/footer.js" type="text/javascript" defer></script>
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
                <form action="insert_order.php" method="GET">
                    <div class="text_box">
                        <div class="text_content">
                            <?php if (isset($product)) : ?>
                                <h1><?php echo $product['productname']; ?></h1>
                                <h4>$<?php echo $product['price']; ?></h4>
                                <p><?php echo $product['productdesc']; ?></p>
                            <?php else : ?>
                                <p>Product not found.</p>
                            <?php endif; ?>
                        </div>
                        <div class="box_addtocart">
                            <input type="submit" id="addtocart" value="Add to Cart">
                            <input type="number" id="quantity" value="0" min="1"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer-component></footer-component>
</body>
</html>
