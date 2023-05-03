<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require 'mailer/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_LOWLEVEL     ;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = gethostbyname('smtp.gmail.com');
    $mail->SMTPAuth   = true;     
    $mail->SMTPSecure = "tls";
    //Enable SMTP authentication
    $mail->Username   = 'mail to send from';                           //SMTP username
    $mail->Password   = 'password ';                        //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS ;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ]
    ];
    //Content format
    $mail->isHTML(true);        //Set email format to HTML
    $mail->CharSet = "UTF-8"; 
    
?>