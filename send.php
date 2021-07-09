<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
 
// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
 
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'millerdimushok@yandex.ru';
$mail->Password = 'Dimonpokemon';
 
// От кого
$mail->setFrom('millerdimushok@yandex.ru', 'test mail');		
 
// Кому
$mail->addAddress('rbru-metrika@yandex.ru');
 
// Тема письма
$mail->Subject = 'phone';
 
// Тело письма
$body = $_POST['telephone'];
$mail->msgHTML($body);
 
$mail->send();

header('Location: /');