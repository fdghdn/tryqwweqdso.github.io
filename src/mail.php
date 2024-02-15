<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['phone']

$mail->isSMTP();                                            //Send using SMTP
$mail->Host = 'smtp.mail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth = true;                                   //Enable SMTP authentication
$mail->Username = 'dufbl4@mail.ru';                     //SMTP username
$mail->Password = 'iforgetITallt1me';                               //SMTP password
$mail->SMTPSecure =  'ssl';            //Enable implicit TLS encryption
$mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

$mail->setFrom('dufbl4@mail.ru');
$mail->addAddress('pawino6388@tospage.com');     //Add a recipient

$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . 'оставил номер' .$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
}else {
    header('location: thank-you.html');
}
?>

