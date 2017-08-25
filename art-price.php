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
    <link rel="stylesheet" href="design/fonts.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <!--<meta content="http://alefers.lv/nika/design/og_image.jpg" property="og:image">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <header id="up">
      <div class="hdr">
        <img class="hdr-logo" src="design/<?php echo $page?>-logo.png" alt="">
        <h1>
          МЕСТА ДЛЯ СВАДЕБНЫХ ФОТОСЕССИЙ ЗА РИГОЙ
        </h1>
      </div>
    </header>
    <article>
      <h2>
        ЕСЛИ ВЫ ВЫБРАЛИ ДЛЯ ПРОГУЛКИ МЕСТА ЗА ГОРОДОМ:
      </h2>
      <ul>
        <li>учтите, что если вы едете на лимузине, время на дорогу увеличивается</li>
        <li>обязательно заранее узнайте маршрут, распечатайте <a href="#" class="art-a">карту</a></li>
        <li>если с вами на других машинах едут гости, выдайте каждому водителю точную инструкцию, как доехать</li>
        <li>узнайте стоимость входных билетов и расходы на парковку</li>
        <li>запаситесь питьевой водой, летом это актулаьнее, чем шампанское</li>
        <li>выбирайте места, откуда будет удобно ехать в банкетный зал</li>
        <li>планируйте время так, чтобы на саму прогулку по месту осталось минимум 2 часа</li>
      </ul>
      <p class="p-left">
        Ниже обзор красивых мест для фотосессии.
      </p>
      <div class="dot-box big">
        <div class="dot">
          1
        </div>
      </div>
      <h2>
        САУЛКРАСТЫ, БЕЛАЯ ДЮНА
      </h2>
      <img class="art-img" src="temp/art-1.jpg">
      <p class="p-left">
        Шикарное место для прогулки и фотосессии. Находится примерно в получасе езды от центра Риги.
        Красивая деревянная дорожка, чистенький пляж, вода, лес – фотографу есть где развернуться.
        Удобно, что есть беседка, где, если она свободна, можно сделать небольшой фуршет и оставить гостей отдыхать во время фотосессии.
        При желании на смотровой площадке можно устроить саму церемонию.
        Удобно, что летом там не так много людей, как в Юрмале или Вецаки, что очень хорошо для свадебных фотографий.
        Есть платная парковка.
      </p>
      <div class="dot-box big">
        <div class="dot">
          2
        </div>
      </div>
      <h2>
        ЮРМАЛА, ПЛЯЖ
      </h2>
      <img class="art-img" src="temp/art-2.jpg">
      <p class="p-left">
        Когда хочется фотографий на море, можно выбрать Юрмалу.
        Стоит учесть, что летом там очень много людей, поэтому лучше выбирать пляжи, где отдыхающих будет чуть меньше.
        Например, на пляже рядом с рестораном «36. linija» народу будет меньше, чем в Дзинтари.
        При выборе места убедитесь , что недалеко есть парковка.
      </p>
      <div style="height: 2vw;"></div>
      <h2>
        КОМПЛЕКТ "МИНИ"<br>СТОИМОСТЬ: 150 EUR
      </h2>
      <img class="art-img" src="temp/art-1.jpg">
      <p class="p-mid">
        фотосъёмка продолжительностью до 6 часов
      </p>
      <div class="dot-box small">
        <div class="dot"></div>
      </div>
      <p class="p-mid">
        примерно 400 фотографий
      </p>
      <div class="dot-box small">
        <div class="dot"></div>
      </div>
      <p class="p-mid">
        диск в индивидуальной обложке
      </p>
      <div class="dot-box small">
        <div class="dot"></div>
      </div>
      <p class="p-mid">
        срок обработки 4-6 недель
      </p>
    </article>
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
      <div class="lang-itm">
        <img src="design/flag_lv.png" alt="LV">
      </div>
      <div class="lang-itm">
        <img src="design/flag_ru.png" alt="RU">
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
var hc = 13.8; // отношение ширины к высоте меню 
var ppHeightCoef = hc;
$(window).scroll(function() {
  if (($(this).scrollTop() > ($(this).width()/5)) && ppHeightCoef < 15) {
    $('.pp-logo img').animate({width: "40%"}, 200);
    ppHeightCoef = 15;
    $('#lang').hide(100);
  }
  if (($(this).scrollTop() < ($(this).width()/5)) && ppHeightCoef > hc) {
    $('.pp-logo img').animate({width: "70%"}, 200);
    ppHeightCoef = hc;
    $('#lang').show(100);
  }
});
$('.lang-itm').click(function() {
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
