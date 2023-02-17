<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$number = $_POST['number'];
$content = $_POST['content'];
$email = $_POST['email'];
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = "smtp.mail.ru";
$mail->SMTPAuth = true;
$mail->Username = "aiaal8964@mail.ru";
$mail->Password = "48GX17tGZT5WF6mXntHV";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->From = "aiaal8964@mail.ru";
$mail->FromName = "Федоров Айаал";


//Адрес куда будут поступать заявки
$mail->addAddress("skillometer@mail.ru", "Skillometer");


$mail->isHTML(true);
//Сообщение
$mail->Subject = "Заявка: " . $name . " " . $email;
$mail->Body = $content;
$mail->AltBody = "";

try {
    $mail->send();
    header("Location:/");
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
