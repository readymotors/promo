
<?php


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to='sergey.petrov.a@gmail.com';

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
<script>
var univar1= (new Date()).getTime();
var univar2='1';
document.write('<img src="http://mixmarket.biz/uni/tev.php?id=1294925883&r='+escape(document.referrer)+'&t='+(new Date()).getTime()+'&a1='+univar1+'&a2='+univar2+'" width="1" height="1"/>');</script>