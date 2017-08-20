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
    <header>
      <div class="hdr">
        <img class="hdr-logo" src="design/<?php echo $page?>-logo.png" alt="">
        <div class="hdr-capt">
          МЕСТА ДЛЯ СВАДЕБНЫХ ФОТОСЕССИЙ ЗА РИГОЙ
        </div>
      </div>
    </header>
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
      <div class="dot-box big">
        <div class="dot">
          1
        </div>
      </div>
      <div class="dot-box small">
        <div class="dot"></div>
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
      <div class="dot-box big">
        <div class="dot">
          2
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
      <div class="dot-box small">
        <div class="dot"></div>
      </div>
      <div class="art-p-mid">
        примерно 400 фотографий
      </div>
      <div class="dot-box small">
        <div class="dot"></div>
      </div>
      <div class="art-p-mid">
        диск в индивидуальной обложке
      </div>
      <div class="dot-box small">
        <div class="dot"></div>
      </div>
      <div class="art-p-mid">
        срок обработки 4-6 недель
      </div>
    </div>
    <div id="links">
      <a href="#" class="link-img-box"><img class="link-img" src="design/4.jpg"></a>
      <div class="link" style="text-align: left;">
        <div class="link-derection">
          ПРЕДЫДУЩАЯ
        </div>
        <a href="#" class="link-hdr">
        В ОЖИДАНИИ
        </a>
      </div>
      <div class="link" style="text-align: right;">
        <div class="link-derection">
          СЛЕДУЮЩАЯ
        </div>
        <a href="#" class="link-hdr">
          ЧТО ВЗЯТЬ С СОБОЙ НА ПРОГУЛКУ
        </a>
      </div>
      <a href="#" class="link-img-box"><img class="link-img" src="design/3.jpg"></a>
    </div>
<?php
include 'scripts/footer.php';
?>
    <nav>
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
<!--            <span class="pp-btn" data-lang="lv">LV</span>
            <span class="pp-btn" data-lang="ru">RU</span> -->
      </div>
      <div class="pp-el">
        <a href="article.php" class="pp-a">СТАТЬИ</a>
      </div>
        <div class="pp-el">
          <a href="#kont" class="pp-a">КОНТАКТЫ</a>
        </div>
    </nav>
    <div id="lang">
      
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
var hc = 13.8; // высота попап меню вычисляется: ширина экрана делить на это число 
var ppHeightCoef = hc;
$(window).scroll(function() {
  if (($(this).scrollTop() > ($(this).width()/5)) && ppHeightCoef < 15) {
    $('.pp-logo img').animate({width: "40%"}, 200);
    ppHeightCoef = 15;
  }
  if (($(this).scrollTop() < ($(this).width()/5)) && ppHeightCoef > hc) {
    $('.pp-logo img').animate({width: "70%"}, 200);
    ppHeightCoef = hc;
  }
});
$(document).ready(function() {
  $(window).resize();
});
$(window).resize(function() {
  $('header').height($(this).width()/3.4321);
  var ppPaddingTop = $(this).width()/13.8;
  $('header').css({paddingTop: ppPaddingTop});
  $('.hdr-<?php echo $page;?>-logo').height($('.hdr-<?php echo $page;?>-logo').width());
  $('.dot-small').height($('.dot-small').width());
  $('.dot-big').height($('.dot-big').width());
  $('.art-link-txt').height($('.art-link-img').height());
  $('.art-space').each(function() {
    var l = $(this).data('l');
    $(this).height($(window).width()*l);
  });
});
$('.set-lang').click(function() {
  $.post(
    "scripts/lang_c.php",
    {lang: $(this).data('lang')},
    function() {
      window.location.reload();
    }
  );
});
    </script>
  </body>
</html>
