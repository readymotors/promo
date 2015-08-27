<?php


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to='sergey.petrov@selectedauto.ru';

$headers = 'From: '.$name."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = 'Форма №2 || Новое сообщение';
$body='Вы получили новое сообщение.'."\n\n";
$body.='Имя: '.$name."\n";
$body.='Email: '.$email."\n";
$body.='Сообщение: '."\n".$message."\n";
	
if(mail($to, $subject, $body, $headers)) {
	die('Отправлено');
} else {
	die('Ошибка');
}

?>