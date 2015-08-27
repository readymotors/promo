<?php 
  session_start();
  include 'php/csrf.class.php';
 
  $csrf = new csrf();

  // Generate Token Id and Valid
  $token_id = $csrf->get_token_id();
  $token_value = $csrf->get_token($token_id);
  // Generate Random Form Names
  $form_names = $csrf->form_names(array('email', 'name', 'referer'), false);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<title>Помощь в продаже автомобиля. Минимальная стоимость услуги, удобно и безопасно | ReadyMotors.ru</title>

<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" media="screen" href="css/reset.css"/>
<link rel="stylesheet" media="screen" href="css/style.css"/>
<link rel="stylesheet" media="screen" href="css/nivo-slider.css"/>
<link rel="stylesheet" media="screen" href="fancybox/jquery.fancybox-1.3.4.css"/>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/modernizr-1.5.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700&subset=cyrillic' rel='stylesheet' type='text/css'>
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div id="header_top_bg">
  <div id="header_top"> <a href="http://www.readymotors.ru"><img src="images/logo.png" width="120" height="57" alt="logo" class="logo"></a>
    <p><span>+7 (495) 215-16-26</span></p>
    <div class="clear"></div>
  </div>
</div>



<div id="wrapper_bg">
  <div id="wrapper"> 
    
    <!--header starts-->
    <div id="header"> 
      
      <!--Main center aligned heading-->
      <h1>Новый способ продать свою машину выгодно!</h1>
	  <center><h3>Не trade-in. Не выкуп. Не комиссионка.</h3></center>
      
      <!--slider_bg starts-->
      <div id="slider_bg">
       <iframe width="600" height="350" src="//www.youtube.com/embed/BOB6k5GEmfo" frameborder="0" allowfullscreen></iframe>
      </div>
      <!--slider_bg ends--> 
      
      <!--subscribe_bg starts-->
      <div class="subscribe_bg">
        <div class="subscribe">
          <div class="tm">Оставить заявку на продажу.</div>
          <p>Мы обязуемся помочь продать ваш автомобиль максимально выгодно и безопасно.</p>
          <form id="subform" action="/promo/order.php" method="post">
            <fieldset>
              <p>
                <input id="pname" name="<?= $form_names['name']; ?>" placeholder="Имя"/>
              </p>
              <p>
                <input id="phone" class="masked" name="<?= $form_names['email']; ?>" placeholder="Телефон" />
                <input type="hidden" name="<?= $form_names['referer']; ?>" value="<?= urldecode(getenv("HTTP_REFERER")); ?>">
                <input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
              </p>
              <p>
                <input onclick="yaCounter21751021.reachGoal('lead'); return true;" class="submit" type="submit" value="Отправить"/>
              </p>
              <div id="result_sub"></div>
            </fieldset>
          </form>
          <script>
            $(function() {
              $(document).on("submit", "form#subform", function(event){
                  var phone = $('#phone').val();
                  var name  = $('#pname').val();
                  if (!phone || !name)
                  {
                  alert("Пожалуйста, заполните поля");
                  return false;
                  }
              });
            });
          </script>
        </div>
      </div>
      <!--subscribe_bg ends--> 
    </div>
    <!--header ends--> 
    
    <!--social starts-->
 
    <!--social ends--> 
    
    <!--content starts-->
    <div id="content"> 
      
      <!--column_half starts-->
      <div class="column_half">
        <div class="feature_topleft">
          <h4>ДЕНЬГИ</h4>
          <p>Стоимость нашей услуги в разы меньше, чем расходы при комиссионном способе и Trade-in выкупе. Стоимость услуги — 2% от цены авто.</p>
        </div>
        <div class="feature_topright">
          <h4>ИСПОЛЬЗОВАНИЕ АВТО</h4>
          <p>Пока мы занимаемся поиском покупателя вашего авто, вы продолжаете ездить на своем автомобиле. Ваш автомобиль не стоит на стоянке.</p>
        </div>
        <div class="feature_center">
          <h2>Почему мы?</h2>
        </div>
        <div class="feature_bottomleft">
          <h4>ВРЕМЯ</h4>
          <p>Затраты личного времени минимальны. Наши менеджеры берут на себя все проблемы и информируют вас о каждом этапе продажи вашего авто.</p>
        </div>
        <div class="feature_bottomright">
          <h4>БЕЗОПАСНОСТЬ</h4>
          <p>Обеспечиваем проверку/пересчет денег и их безопасную передачу вам. Юридически грамотно оформляем все этапа подписания купли/продажи.</p>
        </div>
      </div>
      <!--column_half ends--> 
      
      <!--column_half_last starts-->
      <div class="column_half_last">
        <h3>Из существующих способов продажи для Вас мы сохранили все преимущества и исключили недостатки:</h3>
   
        <ul class="star_bullet">
          <li>Вы приезжаете к нам, мы проверяем документы.</li>
          <li>Делаем техническую экспертизу автомобиля.</li>
          <li>Заключаем договор на оказание услуг.</li>
          <li>Рекомендуем цену по которой можно продать авто.</li>
          <li>Делаем фото и видеосъемку. Хорошие фотографии — залог успеха.</li>
          <li>Вы продолжаете использовать свой автомобиль, а мы ищем покупателя.</li>
          <li>Даем объявление на основных автопорталах и у себя на сайте, рекламируем.</li>
	  <li>Вы нас благодарите за хорошую работу и оплачиваете остаток.</li>
        </ul>
        <!--this clear div is necessary to separate gallery form above content-->
        <div class="clear"></div>
     <h4>Отзывы клиентов</h4>
      <!--testimonial starts-->
      <div class="testimonial"> 
        <!--first testimonial-->
        <div>
          <p>"Переезжая в другую страну, надо было продать машину. Можно было бы отдать перекупщикам, но они предлагали очень мало. Решила воспользоваться Safe-Trade. Смогут продать - хорошо, не успеют - за неделю до отъезда отдам перекупщикам. Успели. Продали и по хорошей цене."</p>
          <p><span>Алексей, Москва.</span></p>
        </div>
		<div>
          <p>"Времени не хватало заняться продажей машины.Оставил заявку на сайте. Позвонили, все разъяснили. Меня условия устроили. Подписали договор. Продали не быстро, но по отличной цене. Меня сразу предупредили, что цена выше рынка и быстро продать не смогут. СПАСИБО ребятам!"</p>
          <p><span>Евгений, Москва.</span></p>
        </div>
        <!--second testimonial-->
        <div>
          <p>"Развелась с мужем. Делили имущество. Пришлось продавать совсем новую машину. Дилер выкупал на 40% меньше цены покупки. Почитала про опасности обмана при самостоятельной продаже. испугалась. Спросила у подруги, как она свою продала? Посоветовала ReadyMotors. Все очень вежливые, свое дело знают, Все очень профессионально."</p>
          <p><span>Кристина, Красногорск.</span></p>
        </div>
	<div>
          <p>"Два года продавал свой автомобиль. Надоело. Обратился в ReadyMotors.  Продали за 10 дней, да еще и по хорошей цене. До сих пор не пойму, как им это удалось?"</p>
          <p><span>Алексей, Москва.</span></p>
        </div>
      </div>
      
      </div>
      <!--column_half_last ends--> 
      
    </div>
    <!--content ends--> 
    
  </div>
  <div class="clear"></div>
</div>
<!--wrapper_bg ends-->
<div class="clear"></div>

<!--content_bottom_bg starts-->
<div id="content_bottom_bg">
  <div id="content_bottom"> 
    
    <!--first column_3 starts-->
    <div class="column_3">
         <h3>Партнеры</h3>
        <p><a href="http://www.dekrarus.ru/index/">DEKRA</a> — международная независимая экспертная организация в области диагностики технического состояния автомобилей.</p>
		<p><a href="http://pravorf.ru/">ООО "Центр правового обслуживания"</a> - неизменно высокое качество предоставляемых услуг, активная профессиональная позиция специалистов в решении сложных юридических задач, доверие и уважение клиентов и партнеров позволило ЦПО стать одной из успешных российских юридических компаний.</p>
	  
      <!--testimonial ends--> 
    </div>
    <!--first column_3 ends--> 
    
    <!--second column_3 starts-->
    <div class="column_3">
      <h4>Контакты</h4>
      <p> +7(495)215-1626, Ленинградский проспект, дом 37, корпус 6,​ город Москва</p>
	  <p><iframe src="http://mapsengine.google.com/map/embed?mid=zruBVyBrogeE.k3FkSSdUATBk" width="310" height="300"></iframe></p>
     
    </div>
    <!--second column_3 ends--> 
    
    <!--last column_3 starts-->
    <div class="column_3_last">
      <h4>Отправить сообщение</h4>
      <form  id="form" method="post" action="/promo/php/submit-form.php">
        <fieldset>
          <div class="left">
          <p>
            <label for="name">Имя </label>
            <input id="name" name="name">
          </p>
          <p>
            <label for="email">E-Mail* </label>
            <input id="email" name="email" class="required email" />
          </p>
          </div> <div class="right">
          <p>
            <label for="message">Сообщение* </label>
            <textarea id="message" name="message" class="required" onfocus="if (this.value == 'Your Message') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your Message';}"></textarea>
          </p>
          </div>
          <p class="submit_btn">
           <input class="submit" type="submit" value=""/>
          </p>
          <div id="result"></div>
        </fieldset>
      </form>
    </div>
    <!--last column_3 ends--> 
    
  </div>
  <div class="clear"></div>
</div>
<!--content_bottom ends-->

<div class="clear"></div>
<script>document.write('<img src="http://mixmarket.biz/uni/t.php?aid=1294932834&r='+escape(document.referrer)+'&t='+(new Date()).getTime()+'" width="1" height="1"/>');</script><noscript><img src="http://mixmarket.biz/uni/t.php?aid=1294932834&r=&t=" width="1" height="1"/></noscript>
<!--footer_bg starts-->
<div id="footer_bg">
  <div id="footer">
    <p>© copyright 2013 <a href="http://www.readymotors.ru/">ReadyMotors.ru</a></p>
    <ul>
      
    </ul>
    <div class="clear"></div>
  </div>
</div>
<!--footer_bg ends--> 

<!--Attached jquery files here--> 
<script src="twitter/twitter.js" type="text/javascript"></script> 
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script> 
<script src="js/jquery.fancybox-1.3.4.js" type="text/javascript"></script> 
<script src="js/jquery.cycle.all.min.js" type="text/javascript"></script> 
<script src="js/jquery.validate.js" type="text/javascript"></script> 
<script src="js/jquery.form.js" type="text/javascript"></script> 
<script src="js/cufon-yui.js" type="text/javascript"></script> 
<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
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
<!-- Google Code for Zayavka Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 983253129;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "lWwHCI_WlwgQiYHt1AM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/983253129/?value=0&amp;label=lWwHCI_WlwgQiYHt1AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>
