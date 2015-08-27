<?php
  session_start();
  include 'php/csrf.class.php';
 $check = 'Спасибо, ваше сообщение отправлено';
  $csrf = new csrf();
  $token_id = $csrf->get_token_id();
  $token_value = $csrf->get_token($token_id);
  $form_names = $csrf->form_names(array('email', 'name', 'referer'), false);
if(isset($_POST[$form_names['name']], $_POST[$form_names['email']])) {
          // Check if token id and token value are valid.
       
      if($csrf->check_valid('post')) {
              // Get the Form Variables.
              $name  = $_POST[$form_names['name']];
              $email = $_POST[$form_names['email']];
              $ref   = $_POST[$form_names['referer']];

              //$to='sergey.petrov@selectedauto.ru';
              $to='info@readymotors.ru';

            $headers = "From: admin@readymotors.ru\r\n" .
                'Reply-To: '.$email."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                
            $subject = 'Главная форма || Новый лид';

            $body.='Имя: '.$name."\n";
            $body.='Телефон: '.$email."\n";
            $body.='Откуда пришел: '.$ref."\n";

                
            mail($to, $subject, $body, $headers);
      }

      $form_names = $csrf->form_names(array('name', 'email', 'referer'), true);
} else {
  echo "string";
  $check = 'Сообщение не отправлено. Пожалуйста, проверьте правильность введенных данных и повторите попытку.';
}


 
?>
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
<script> 
var univar1= (new Date()).getTime();
var univar2='1';
document.write('<img src="http://mixmarket.biz/uni/tev.php?id=1294925883&r='+escape(document.referrer)+'&t='+(new Date()).getTime()+'&a1='+univar1+'&a2='+univar2+'" width="1" height="1"/>');</script>

<div id="wrapper_bg">
  <div id="wrapper"> 
    
    <!--header starts--> 
    <div id="header"> 
      <h1><?php echo $check  ?></h1>
	  <br>
	  <center>
	  <h3><a href="javascript: history.go(-1)">Назад</a></h3>
	  </center>
      <!--Main center aligned heading-->

      
     
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45956477-1', 'readymotors.ru');
  ga('send', 'pageview');

</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '85126';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
