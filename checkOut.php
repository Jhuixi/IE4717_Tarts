<?php
session_start();
$subtotal = 0.00;
$totalprice = 0.00;
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarts</title>
    <link rel="stylesheet" href="css/checkOut.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300&family=Lato:wght@100;300&family=Lora&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="js/header.js" type="text/javascript" defer></script>
    <script type="text/javascript" src="js/formvalidation.js"></script>
    <script defer src="js/animation.js"></script>
</head>

<body style="background-color: #ece2d6;">
    <header-component></header-component>
    <div class="container">
        <div class="details-left">
            <h1>My Details</h1>
            <hr>
            <form id="placeorderform" action="placeorder.php" method="POST">
                <div class="form-group">
                    <div class="sub-left">
                        <label for="firstName"><h2>First Name</h2></label>
                        <input type="text" name="firstName" id="firstName" required="1">
                    </div>
                    <div class="sub-right">
                        <label for="lastName"><h2>Last Name</h2></label>
                        <input type="text" name="lastName" id="lastName">
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <br><br>
                    <label for="email"><h2>Email address</h2></label>
                    <input type="email" class="form-control" id="email" required="1" onchange="validateEmail()" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="date"><h2>Delivery Date</h2></label>
                    <input type="date" name="date" id="date" required = "1" onchange="validateDate()">
                </div>
                <div class="form-group">
                    <br>
                    <label><h2>Address</h2></label>
                    <input type="text" name="Add1" id="Add1" required="1" placeholder="Line 1">
                    <br><br>
                    <input type="text" name="Add2" id="Add2" placeholder="Line 2 (Optional)">
                </div>
                <div class="form-group">
                    <label><h2>Postal Code</h2></label>
                    <input type="text" name="postal" id="postal" required="1">
                </div>
                <div class="form-group">
                    <label><h2>Notes</h2></label>
                    <textarea name="note" id="note" rows="4" style="width: 100%;"></textarea>
                </div>
                <div class="placeorder">
                    <input type="submit" value="Place Order">
                </div>
            </form>
        </div>
        <div class="cart-right">
            <h1>My Orders</h1>
            <hr>
            <?php
            if (isset($_SESSION['order']) && is_array($_SESSION['order']) && !empty($_SESSION['order'])) {
                foreach ($_SESSION['order'] as $productid => $cartItem) {
                    $productname = $cartItem['productname'];
                    $price = $cartItem['price'];
                    $quantity = $cartItem['quantity'];
                    $totalprice = $price * $quantity;

                    echo '
                    <div class="cartItem">
                        <div class="top">
                            <div class="title-left">
                                <h2>' . $productname . '</h2>
                            </div>
                            <div class="icon-right">
                                <a href="deleteItem.php?productid=' . $productid . '">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                    style="fill:#7c6550; float: right;">
                                    <g fill="#7c6550" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                    <path d="M4.99023,3.99023c-0.40692,0.00011 -0.77321,0.24676 -0.92633,0.62377c-0.15312,0.37701 -0.06255,0.80921 0.22907,1.09303l6.29297,6.29297l-6.29297,6.29297c-0.26124,0.25082 -0.36647,0.62327 -0.27511,0.97371c0.09136,0.35044 0.36503,0.62411 0.71547,0.71547c0.35044,0.09136 0.72289,-0.01388 0.97371,-0.27511l6.29297,-6.29297l6.29297,6.29297c-0.25082,0.26124 0.62327,0.36648 0.97371,0.27512c-0.35044,0.09136 0.62411,-0.36503 0.71547,-0.71547c0.09136,-0.35044 -0.01388,-0.72289 -0.27512,-0.97371l-6.29297,-6.29297l6.29297,-6.29297c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-6.29297,6.29297l-6.29297,-6.29297c-0.18827,-0.19353 -0.4468,-0.30272 -0.7168,-0.30273z"></path>
                                    </g>
                                    </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <br><br>
                        <div class="bottom">
                        <form action="insert_order.php" method="POST">
                            <input type="hidden" name="productid" value=' . $productid . '>
                            <input type="hidden" name="price" value=' . $price. '>
                            <div class="stepper">
                                <input type="number" name="quantity" value='.$quantity.' min="1">
                                <input type="submit" value="Add to Cart">
                            </div>
                        </form>

                            <div class="price">
                                <h2>$' . number_format($price, 2) .'</h2>
                            </div>
                        </div>
                        <br><br><br><br><br><br>
                    </div>';
                    $subtotal += $totalprice;
                }
                echo '
                    <div class="total">
                        <div class="total-left">
                            <h2>Subtotal</h2>
                        </div>
                        <div class="total-right">
                            <h2>$'. number_format($subtotal, 2) .'</h2>
                        </div>
                    </div>
                    <div class="total">
                        <div class="total-left">
                            <h2>Delivery Fee</h2>
                        </div>
                        <div class="total-right">
                            <h2>$3.00</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="total">
                        <div class="total-left">
                            <h1>Total</h1>
                            <h4>Tax included</h4>
                        </div>
                        <div class="totalprice-right">
                            <h2>$'. number_format($subtotal+3, 2) .'</h2>
                        </div>
                    </div>
                ';
                }

                else {
                    echo "<h2>Your cart is empty.</h2>";
                }
                ?>
        </div>
    </div>
</body>
</html>


<!-- <select id="pax" name="pax" size="1" required="1" style="
                        height: 28px;
                        width: 100%;
                        background-color: #FAFAF9;
                        color: #6e5e4f;
                        border: 1px solid #6e5e4f;">
                            <option value="pax1">8:00</option>
                            <option value="pax2">9:00</option>
                            <option value="pax3">10:00</option>
                            <option value="pax4">11:00</option>
                            <option value="pax5">12:00</option>
                            <option value="pax5">13:00</option>
                            <option value="pax5">14:00</option>
                            <option value="pax5">15:00</option>
                            <option value="pax5">16:00</option>
                            <option value="pax5">17:00</option>
                            <option value="pax5">18:00</option>
                            <option value="pax5">19:00</option>
                            <option value="pax5">20:00</option>
                            <option value="pax5">21:00</option>
                        </select> -->
