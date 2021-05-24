<?php 

$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact.oliianenko';                 // Наш логин
$mail->Password = '#LaXJgoA26D0';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('contact.oliianenko@gmail.com', 'Portfolio message');   // От кого письмо 
$mail->addAddress('felangelena@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Portfolio message';
$mail->Body    = '
	Client left this data: <br> 
	Name: ' . $name . ' <br>
	E-mail: ' . $email . '<br>
	Message: ' . $message . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>