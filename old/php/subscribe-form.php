<?php



$name=$_POST['name'];
$email=$_POST['email'];


$to='sergey.petrov.a@gmail.com';

$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
$subject = 'Главная форма || Новый лид';

$body.='Имя: '.$name."\n";
$body.='Телефон: '.$email."\n";

	
if(mail($to, $subject, $body, $headers)) {
	return header('Location: /promo/order.html');
	
} else {
	die('Ошибка');
}
 
?>