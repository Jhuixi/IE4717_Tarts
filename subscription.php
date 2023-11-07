
<?php

require “/Applications/XAMPP/xamppfiles/htdocs/mail_patch.php;”
use function mail_patch\mail;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $to = $_POST['email'];
    $to = 'root@localhost';
    $subject = 'the subject';
    $message = 'hello from php mail';
    $headers = 'From: root@localhost' . "\r\n" .
    'Reply-To: root@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers,
    '-froot@localhost');
    echo ("mail sent to : ".$to);
}



// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['email'];
//     $password = 'Stacey<3Bbt';
//     $subject = 'Subscription Confirmation';
//     $message = 'Thank you for subscribing to our service.';
//
//     $headers = 'From: root@localhost' . "\r\n" .
//                'Reply-To: root@localhost' . "\r\n" .
//                'X-Mailer: PHP/' . phpversion();
//
//     // Use the mail() function to send the email
//     if (mail($email, $subject, $message, $headers, -f'root@localhost')) {
//         echo 'Confirmation email sent successfully to:' .$email;
//     } else {
//         echo 'Error sending confirmation email.';
//       }
// }
?>



<!-- if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'siyingshao@gmail.com';
    $subject = 'the subject';
    $message = 'hello from PHP mail';
    $headers = 'From: siyingshao@gmail.com' . "\r\n" .
                'Reply-To: siyingshao@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    echo ("Mail sent to: "  $to);
} -->


<!-- IE4717siyingjiahui
siyingjiahui@gmail.com -->

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
