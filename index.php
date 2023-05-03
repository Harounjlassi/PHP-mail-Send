<?php
require_once'mail.php';
$mail->setFrom('mail to send from','');
$mail->addAddress('mail to send to');
$mail->Subject='welcome';
$mail->Body='';
$mail->AltBody='welcome ';
$mail->send();
?>