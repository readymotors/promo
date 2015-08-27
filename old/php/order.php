<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<title>Помощь в продаже автомобиля. Минимальная стоимость услуги, удобно и безопасно | selectedauto.ru</title>

<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" media="screen" href="css/reset.css"/>
<link rel="stylesheet" media="screen" href="css/style.css"/>
<link rel="stylesheet" media="screen" href="css/nivo-slider.css"/>
<link rel="stylesheet" media="screen" href="fancybox/jquery.fancybox-1.3.4.css"/>
<script src="js/modernizr-1.5.min.js" type="text/javascript"></script>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700&subset=cyrillic' rel='stylesheet' type='text/css'>
</head>

<body>

<div id="fb-root"></div>




<div id="header_top_bg">
  <div id="header_top"> <img src="images/logo.png" width="135" height="42" alt="logo" class="logo">
    <p><span>+7 (495) 215-16-26</span></p>
    <div class="clear"></div>
  </div>
</div>



<div id="wrapper_bg">
  <div id="wrapper"> 
    
    <!--header starts-->
    <div id="header"> 
      
      <!--Main center aligned heading-->
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
	die('Cпасибо, ваше сообщение отправлено!');
} else {
	die('Ошибка, пожалуйста заполните форму повторно');
}

?>
      
     
<!--footer_bg ends--> 

<!--Attached jquery files here--> 
<script src="twitter/twitter.js" type="text/javascript"></script> 
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script> 
<script src="js/jquery.fancybox-1.3.4.js" type="text/javascript"></script> 
<script src="js/jquery.cycle.all.min.js" type="text/javascript"></script> 
<script src="js/jquery.validate.js" type="text/javascript"></script> 
<script src="js/jquery.form.js" type="text/javascript"></script> 
<script src="js/cufon-yui.js" type="text/javascript"></script> 

<script src="js/custom.js" type="text/javascript"></script> 
<script type="text/javascript"> Cufon.now(); </script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21751021 = new Ya.Metrika({id:21751021,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21751021" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '85126';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
