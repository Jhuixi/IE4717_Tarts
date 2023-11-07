<!DOCTYPE html>
<html>
<link rel="stylesheet" href="CSS/subscription.css">
    <body >

        <h1>Thank you for subscribing to our mailing list!</h1>
        <p>Click "Home" to be redirected back to the home page.</p>
            <div class="go_home">
                <form action = "index.html">
                    <button>Home</button>
                </form>
            </div>
            

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // $to = $_POST['email'];
            
                $to      = 'f32ee@localhost';
                $subject = 'Subscription to Tartie Delights';
                $message = 'Welcome to our mailing list! Here you can find exlcusive rewards and content that you will definitely love. ';
                $headers = 'From: f32ee@localhost' . "\r\n" .
                            'Reply-To: f32ee@localhost' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers,'-ff32ee@localhost');
            }
            ?> 

            

    </body>
</html>
