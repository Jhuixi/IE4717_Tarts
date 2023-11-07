<!DOCTYPE html>
<html>
<link rel="stylesheet" href="CSS/subscription.css">
<link rel="stylesheet" href="css/checkOut.css">
<style>
    table { margin: auto; border: 5p solid #c09241; width: 600px; border-spacing: 0;} 
    td, th { text-align: left; padding: 5px; font-family: 'Source Sans 3', sans-serif; border-style: none; } 
    caption { font-family: Verdana, sans-serif; font-weight: bold; font-size: 1.2em; padding-bottom: 5px;}
    tr:nth-of-type(even) {background-color: #FAFAF9;} 
    tr:first-of-type {background-color: #c09241; color: #FAFAF9;} 
</style>
    <body style="margin: auto; margin-top: 7.5%;">
    <h1>Thank you for ordering with us!</h1>
    <br><br><br><br>
    <?php
        session_start();

        if (isset($_SESSION['order']) && is_array($_SESSION['order']) && !empty($_SESSION['order'])) {
            $subtotal = 0;
            echo '<table border="1">
            <caption>Order Summary</caption>
            <tr> 
                <th>Product Name</th>
                <th>Quantity</th> 
                <th>Price</th>
            </tr>';

            foreach ($_SESSION['order'] as $productid => $cartItem) {
                $productname = $cartItem['productname'];
                $price = $cartItem['price'];
                $quantity = $cartItem['quantity'];
                $totalprice = $price * $quantity;
                $subtotal += $totalprice;

                echo '
                    <tr> 
                        <td>' . $productname . '</td>
                        <td>' . $quantity . '</td> 
                        <td>$' . number_format($price, 2) . '</td>
                    </tr>';
            }

            echo '
            <tr> 
                <td colspan="2"><b>Total Amount Paid: </b></td>
                <td><b>$' . number_format($subtotal + 3, 2) .'</b></td>
            </tr>
            </table>
            ';
        } else {
            echo "<h2>Error</h2>";
        }
        ?>
        <h4>An order confirmation email has been sent to your email address.</h4>
        <p>Click "Home" to be redirected back to the home page.</p><br><br>
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