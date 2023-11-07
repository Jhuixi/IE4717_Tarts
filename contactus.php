<!DOCTYPE html>
<html>
<link rel="stylesheet" href="CSS/subscription.css">
    <body >

        <h1>Thank you for reaching out to us! </h1>
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
                $subject = 'Feedback received';
                $message = 'Thank you for reaching out to us. We will reply to you within 2 working days. ';
                $headers = 'From: f32ee@localhost' . "\r\n" .
                            'Reply-To: f32ee@localhost' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers,'-ff32ee@localhost');
            }
            ?>



    </body>
</html>
