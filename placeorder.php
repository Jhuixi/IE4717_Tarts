<!DOCTYPE html>
<html>
<link rel="stylesheet" href="CSS/subscription.css">
    <body >

        <h1>Thank you for ordering with us!</h1>
        <?php
        session_start();
            if (isset($_SESSION['order']) && is_array($_SESSION['order']) && !empty($_SESSION['order'])) {
                foreach ($_SESSION['order'] as $productid => $cartItem) {
                    $productname = $cartItem['productname'];
                    $price = $cartItem['price'];
                    $quantity = $cartItem['quantity'];
                    $totalprice = $price * $quantity;

                    echo'
                        <h2>' . $productname . '</h2>
                        <h2>$' . number_format($price, 2) .'</h2>
                    ';}
                echo'
                    <h2>$'. number_format($subtotal, 2) .'</h2>
                    <h2>$'. number_format($subtotal+3, 2) .'</h2>
                ';
            }else {
                echo "<h2>Error</h2>";
            }
            ?> 


        <h4>An order confirmation email has been sent to your email address.</h4>
        <p>Click "Home" to be redirected back to the home page.</p>
            <div class="go_home">
                <form action = "index.html">
                    <button>Home</button>
                </form>
            </div>
            

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // $to = $_POST['email'];
                unset($_SESSION['order']);
                $to      = 'f32ee@localhost';
                $subject = 'Order confirmation for Tartie Delights';
                $message = 'Here is your order confirmation. Thank you for ordering with us!';
                $headers = 'From: f32ee@localhost' . "\r\n" .
                            'Reply-To: f32ee@localhost' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers,'-ff32ee@localhost');
            }
            ?> 

            

    </body>
</html>