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
    <!-- <script src="js/footer.js" type="text/javascript" defer></script> -->
    <script defer src="js/animation.js"></script>
</head>

<body style="background-color: #ece2d6;">
    <header-component></header-component>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Order Now</li>
          </ul>
        <div class="details-left">
            <h1>My Details</h1>
            <hr>
            <form action="checkOut_page.php">
                <div class="form-group">
                    <div class="sub-left">
                        <label for="firstName"><h2>First Name</h2></label>
                        <input type="text" name="firstName" id="firstName" required="1">
                    </div>
                    <div class="sub-right">
                        <label for="firstName"><h2>Last Name</h2></label>
                        <input type="text" name="lastName" id="lastName" required="1">  
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <br><br>
                    <label for="email"><h2>Email address</h2></label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">  
                </div>
                <div class="form-group">
                    <label><h2>Delivery Date and Time</h2></label>
                    <div class="sub-left">
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="sub-right">
                        <select id="pax" name="pax" size="1" style="
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
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <br>
                    <label><h2>Address</h2></label>
                    <input type="text" name="Add1" id="Add1" required="1" placeholder="Line 1">
                    <br><br>
                    <input type="text" name="Add2" id="Add2" required="1" placeholder="Line 2 (Optional)">       
                </div>
                <div class="form-group">
                    <label><h2>Postal Code</h2></label>
                    <input type="text" name="postal" id="postal" required="1">
                </div>
                <div class="form-group">
                    <label><h2>Notes</h2></label>
                    <textarea name="note" id="note" rows="4" style="width: 100%;"></textarea>        
                </div>
            </form>
        </div>
        <div class="cart-right">
            <h1>My Orders</h1>
            <hr>
            <?php
            session_start();
            if (isset($_SESSION['order']) && count($_SESSION['order']) > 0) {
                foreach ($_SESSION['order'] as $index => $_SESSION['order']) {
                    $productid = $_SESSION['order']['productid'];
                    $productname = $_SESSION['order']['productname'];
                    $price = $_SESSION['order']['price'];
                    $quantity = $_SESSION['order']['quantity'];
                    $totalprice = $price * $quantity;

                    echo '
                    <div class="cartItem">
                        <div class="top">
                            <div class="title-left">
                                <h2>' . $productname . '</h2>
                            </div>
                            <div class="icon-right">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                                style="fill:#7c6550; float: right;">
                                <g fill="#7c6550" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(10.66667,10.66667)">
                                <path d="M4.99023,3.99023c-0.40692,0.00011 -0.77321,0.24676 -0.92633,0.62377c-0.15312,0.37701 -0.06255,0.80921 0.22907,1.09303l6.29297,6.29297l-6.29297,6.29297c-0.26124,0.25082 -0.36647,0.62327 -0.27511,0.97371c0.09136,0.35044 0.36503,0.62411 0.71547,0.71547c0.35044,0.09136 0.72289,-0.01388 0.97371,-0.27511l6.29297,-6.29297l6.29297,6.29297c-0.25082,0.26124 0.62327,0.36648 0.97371,0.27512c-0.35044,0.09136 0.62411,-0.36503 0.71547,-0.71547c0.09136,-0.35044 -0.01388,-0.72289 -0.27512,-0.97371l-6.29297,-6.29297l6.29297,-6.29297c0.29576,-0.28749 0.38469,-0.72707 0.22393,-1.10691c-0.16075,-0.37985 -0.53821,-0.62204 -0.9505,-0.60988c-0.2598,0.00774 -0.50638,0.11632 -0.6875,0.30273l-6.29297,6.29297l-6.29297,-6.29297c-0.18827,-0.19353 -0.4468,-0.30272 -0.7168,-0.30273z"></path>
                                </g>
                                </g>
                                </svg>
                            </div>
                        </div>
                        <br><br>
                        <div class="bottom">
                            <div class="stepper">
                                <input type="number" value="' . $quantity . '">
                            </div>
                            <div class="price">
                                <h2>' . $price . '</h2>
                            </div>
                        </div>
                    </div>';
                    $subtotal += $totalprice;
                }
                } else {
                    echo "<h2>Your cart is empty.</h2>";
                }
                ?>
            <!-- <div class="cartItem">
            </div> -->
        </div>
    </div>
    <footer-component></footer-component>
</body>
</html>