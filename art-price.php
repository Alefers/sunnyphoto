<?php
session_start();
if (!isset($_SESSION['lang'])) {
   $_SESSION['lang'] = 'ru';
}
$lang = $_SESSION['lang'];
include 'scripts/db_con.php';
?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Свадебный и семейный фотограф</title>
      <link rel="stylesheet" href="design/art.css" />
      <link rel="stylesheet" href="design/footer.css" />
      <link rel="stylesheet" href="design/fonts.css" />
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
      <!--<meta content="http://alefers.lv/nika/design/og_image.jpg" property="og:image">-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
      <div id="header">
         <div class="hdr">
            <div class="hdr-<?php echo $page;?>-logo"></div>
            <div class="hdr-capt">
               МЕСТА ДЛЯ СВАДЕБНЫХ ФОТОСЕССИЙ ЗА РИГОЙ
            </div>
         </div>
      </div>
      <div id="article">
         <div class="art-h">
            ЕСЛИ ВЫ ВЫБРАЛИ ДЛЯ ПРОГУЛКИ МЕСТА ЗА ГОРОДОМ:
         </div>
         <ul class="art-ul">
            <li>учтите, что если вы едете на лимузине, время на дорогу увеличивается</li>
            <li>обязательно заранее узнайте маршрут, распечатайте <a href="#" class="art-a">карту</a></li>
            <li>если с вами на других машинах едут гости, выдайте каждому водителю точную инструкцию, как доехать</li>
            <li>узнайте стоимость входных билетов и расходы на парковку</li>
            <li>запаситесь питьевой водой, летом это актулаьнее, чем шампанское</li>
            <li>выбирайте места, откуда будет удобно ехать в банкетный зал</li>
            <li>планируйте время так, чтобы на саму прогулку по месту осталось минимум 2 часа</li>
         </ul>
         <div class="art-p">
            Ниже обзор красивых мест для фотосессии.
         </div>
         <div class="art-dot dot-big">
            <div>
               &nbsp;1.
            </div>
         </div>
         <div class="art-h">
            САУЛКРАСТЫ, БЕЛАЯ ДЮНА
         </div>
         <img class="art-img" src="temp/art-1.jpg">
         <div class="art-p">
            Шикарное место для прогулки и фотосессии. Находится примерно в получасе езды от центра Риги.
            Красивая деревянная дорожка, чистенький пляж, вода, лес – фотографу есть где развернуться.
            Удобно, что есть беседка, где, если она свободна, можно сделать небольшой фуршет и оставить гостей отдыхать во время фотосессии.
            При желании на смотровой площадке можно устроить саму церемонию.
            Удобно, что летом там не так много людей, как в Юрмале или Вецаки, что очень хорошо для свадебных фотографий.
            Есть платная парковка.
         </div>
         <div class="art-dot dot-big">
            <div>
               &nbsp;2.
            </div>
         </div>
         <div class="art-h">
            ЮРМАЛА, ПЛЯЖ
         </div>
         <img class="art-img" src="temp/art-2.jpg">
         <div class="art-p">
            Когда хочется фотографий на море, можно выбрать Юрмалу.
            Стоит учесть, что летом там очень много людей, поэтому лучше выбирать пляжи, где отдыхающих будет чуть меньше.
            Например, на пляже рядом с рестораном «36. linija» народу будет меньше, чем в Дзинтари.
            При выборе места убедитесь , что недалеко есть парковка.
         </div>
         <div class="art-space" data-l="0.04"></div>
         <div class="art-h">
            КОМПЛЕКТ "МИНИ"<br>СТОИМОСТЬ: 150 EUR
         </div>
         <img class="art-img" src="temp/art-1.jpg">
         <div class="art-p-mid">
            фотосъёмка продолжительностью до 6 часов
         </div>
         <div class="art-dot dot-small"></div>
         <div class="art-p-mid">
            примерно 400 фотографий
         </div>
         <div class="art-dot dot-small"></div>
         <div class="art-p-mid">
            диск в индивидуальной обложке
         </div>
         <div class="art-dot dot-small"></div>
         <div class="art-p-mid">
            срок обработки 4-6 недель
         </div>
         <div class="art-links">
            <div class="art-link left">
               <img class="art-link-img left" src="design/4.jpg">
               <div class="art-link-txtbox right">
                  <div class="art-link-txt" style="text-align: left;">
                     <span class="art-link-derect">
                        ПРЕДЫДУЩАЯ
                     </span>
                     <br>
                     <span class="art-link-hdr">
                        В ОЖИДАНИИ
                     </span>
                  </div>
               </div>
            </div>
            <div class="art-link right">
               <img class="art-link-img right" src="design/3.jpg">
               <div class="art-link-txtbox left">
                  <div class="art-link-txt" style="text-align: right;">
                     <span class="art-link-derect">
                        СЛЕДУЮЩАЯ
                     </span>
                     <br>
                     <span class="art-link-hdr">
                        ЧТО ВЗЯТЬ С СОБОЙ НА ПРОГУЛКУ
                     </span>
                  </div>
               </div>
            </div>
            <div style="clear: both;"></div>
         </div>
      </div>
<?php
include 'scripts/footer_abme.php';
?>
      <div id="popup-menu">
         <div class="pp-el anim">
            ГАЛЕРЕЯ
            <div class="pp-gal">
<?php
include 'scripts/gal-menu-links.php';
?>
            </div>
         </div>
         <div class="pp-el anim">
            ЦЕНЫ И УСЛУГИ
            <div class="pp-gal">
<?php
include 'scripts/price-menu-links.php';
?>
            </div>
         </div>
         <div class="pp-logo">
            <img src="design/logo-b.png" onclick="window.location = 'index.php'">
            <span class="pp-btn<?php if ($lang === 'ru') {echo ' set-lang';}?>" data-lang="lv">LV</span>
            <span class="pp-btn<?php if ($lang === 'lv') {echo ' set-lang';}?>" data-lang="ru">RU</span>
         </div>
         <div class="pp-el">
            <a href="article.php" class="pp-a">СТАТЬИ</a>
         </div>
         <div class="pp-el">
            <a href="#kont" class="pp-a">КОНТАКТЫ</a>
         </div>
      </div>
      <script>
         $('.anim').mouseover(function() {
            $(this).children('.pp-gal').show().stop(true).animate({
               opacity: 1,
               marginTop: '5%'
            }, 300);
         });
         $('.anim').mouseout(function() {
            $(this).children('.pp-gal').stop(true).animate({
               opacity: 0,
               marginTop: '25%'
            }, 300).delay(1).hide(0);
         });
         var hc = 11; // высота попап меню вычисляется ширина экрана делить на это число 
         var ppHeightCoef = hc;
         var ppImgWidthPerc = '70%';
         $(window).scroll(function() {
            $('.go_down').hide();
            if (($(this).scrollTop() > ($(this).width()/5)) && ppHeightCoef < 15) {
               $('.pp-btn').hide();
               var ppHeight = $(this).width()/24;
               $('#popup-menu').animate({height: ppHeight}, 200);
               var ppImgWidth = $('.pp-logo').width()*0.4;
               ppImgWidthPerc = '30%';
               $('.pp-logo img').animate({width: ppImgWidth}, 200);
               ppHeightCoef = 15;
            }
            if (($(this).scrollTop() < ($(this).width()/5)) && ppHeightCoef > hc) {
               var ppHeight = $(this).width()/hc;
               $('#popup-menu').animate({height: ppHeight}, 200);
               $('.pp-btn').show();
               var ppImgWidth = $('.pp-logo').width()*0.7;
               ppImgWidthPerc = '70%';
               $('.pp-logo img').animate({width: ppImgWidth}, 200);
               ppHeightCoef = hc;
            }
         });
         $(document).ready(function() {
            $(window).resize();
         });
         $(window).resize(function() {
            $('#header').height($(this).width()/3.4321);
            var ppPaddingTop = $(this).width()/hc;
            var ppHeight = $(this).width()/ppHeightCoef;
            $('#header').css({paddingTop: ppPaddingTop});
            $('.pp-logo img').css({width: ppImgWidthPerc});
            $('.pp-lang').height($('.pp-btn').height());
            $('.hdr-<?php echo $page;?>-logo').height($('.hdr-<?php echo $page;?>-logo').width());
            $('#popup-menu').height(ppHeight);
            $('.dot-small').height($('.dot-small').width());
            $('.dot-big').height($('.dot-big').width());
            $('.art-link-txt').height($('.art-link-img').height());
            $('.art-space').each(function() {
               var l = $(this).data('l');
               $(this).height($(window).width()*l);
            });
         });
         $('.set-lang').click(function() {
            var lang = $(this).data('lang');
            $.post(
               "scripts/lang_c.php",
               {lang: lang},
               function() {
                  window.location.reload();
               }
            );
            $('.set-lang').removeClass('set-lang');
            if (lang === 'ru') {
               $('.pp-btn').find('[data-lang="lv"]').addClass('set-lang');
            } else {
               $('.pp-btn').find('[data-lang="ru"]').addClass('set-lang');
            }
         });
      </script>
   </body>
</html>
