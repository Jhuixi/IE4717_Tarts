<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = 'IE4717siyingjiahui';
    $subject = 'Subscription Confirmation';
    $message = 'Thank you for subscribing to our service.';

    $headers = 'From: siyingjiahui@gmail.com' . "\r\n" .
               'Reply-To: siyingjiahui@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Use the mail() function to send the email
    if (mail($email, $subject, $message, $headers)) {
        echo 'Confirmation email sent successfully.';
    } else {
        echo 'Error sending confirmation email.';
    }
}
?>


<!-- 
    
    XMAPP/xmappfiles/etc/php.ini
    [mail function]
    ; For Win32 only.
    ; http://php.net/smtp
    SMTP=localhost
    ; http://php.net/smtp-port
    smtp_port=25

    ; For Win32 only.
    ; http://php.net/sendmail-from
    sendmail_from = siyingjiahui@gmail.com

 -->