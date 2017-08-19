<?php
session_start();
include 'scripts/db_con.php';
if (!isset($_SESSION['lang'])) {
   $_SESSION['lang'] = 'ru';
}
$lang = $_SESSION['lang'];
$s_id = intval($_GET['s']);
$sql_section = mysqli_query($db, "SELECT * FROM sp_sections WHERE s_id = $s_id AND s_show = 1 AND s_img > 0");
if (mysqli_num_rows($sql_section)) {
   $row_section = mysqli_fetch_array($sql_section);
   $bg = 'images/sections/' . $row_section['s_img'] . '.jpg';
   $title = $row_section['s_title_' . $lang];
} else {
   $bg = 'design/default-bg.jpg';
   $title = 'ЭТОТ РАЗДЕЛ ПУСТ ИЛИ НЕ СУЩЕСТВУЕТ';
}
?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Свадебный и семейный фотограф</title>
      <link rel="stylesheet" href="design/gal.css" type="text/css" />
      <link rel="stylesheet" href="design/footer.css" type="text/css" />
      <link rel="stylesheet" href="design/fonts.css" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
      <!--<meta content="http://alefers.lv/nika/design/og_image.jpg" property="og:image">-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
      <div id="header" style="background: url(<?php echo $bg; ?>) no-repeat; background-size: contain;">
         <div class="hdr-menu">
            <div class="hdr-menu-el anim">
               ГАЛЕРЕЯ
               <div class="gal">
<?php
include 'scripts/gal-menu-links.php';
?>
               </div>
            </div>
            <div class="hdr-menu-el anim">
               ЦЕНЫ И УСЛУГИ
               <div class="gal">
<?php
include 'scripts/price-menu-links.php';
?>
               </div>
            </div>
            <div class="hdr-menu-logo">
               <img src="design/logo.png" onclick="window.location = 'index.php'">
               <div class="hdr-lang">
                  <span class="hdr-lang-btn<?php if ($lang === 'ru') {echo ' set-lang';}?>" data-lang="lv">LV</span>
                  <span class="hdr-lang-btn<?php if ($lang === 'lv') {echo ' set-lang';}?>" data-lang="ru">RU</span>
               </div>
            </div>
            <div class="hdr-menu-el">
               <a href="article.php" class="hdr-menu-a">СТАТЬИ</a>
            </div>
            <div class="hdr-menu-el">
               <a href="#kont" class="hdr-menu-a">КОНТАКТЫ</a>
            </div>
            <div class="hdr-capt hdr-ct-w">
               <?php echo $title; ?>
            </div>
         </div>
      </div>
      <div id="content">
<?php
$sql_block = mysqli_query($db, "SELECT * FROM sp_blocks WHERE b_show = 1 AND b_img > 0 ORDER BY b_id DESC LIMIT 6 ");
if (mysqli_num_rows($sql_block)) {
   while ($row_block = mysqli_fetch_array($sql_block)) {
      echo '<div class="cn-cell-box" style="background: url(images/blocks/' . $row_block['b_img'] . '.jpg) no-repeat; background-size: contain;">';
      if ($row_block['b_txt_color'] == 1) {
         echo '<div class="cn-cell-inn cn-clr-w">';
      } else {
         echo '<div class="cn-cell-inn cn-clr-b">';
      }
      echo '<div class="cn_cell-hdr">' . $row_block['b_title_' . $lang] . '</div>';
      if ($row_block['b_sign'] == 1) {
         echo '<div class="cn-cell-ah">' . $row_block['b_sign_' . $lang] . '</div>';
      }
      echo '</div></div>';
   }
}
?>
      </div>
      <div class="before-ftr-line">
         <span class="more">ПОСМОТРЕТЬ ЕЩЁ</span>
      </div>
<?php
include 'scripts/footer_abme.php';
?>
      <div id="popup-menu">
         <div class="pp-el anim">
            ГАЛЕРЕЯ
            <div class="gal">
<?php
include 'scripts/gal-menu-links.php';
?>
            </div>
         </div>
         <div class="pp-el anim">
            ЦЕНЫ И УСЛУГИ
            <div class="gal">
<?php
include 'scripts/price-menu-links.php';
?>
            </div>
         </div>
         <div class="pp-logo">
            <img src="design/logo-b.png">
            <div class="pp-lang">
               <span class="pp-btn<?php if ($lang === 'ru') {echo ' set-lang';}?>" data-lang="lv">LV</span>
               <span class="pp-btn<?php if ($lang === 'lv') {echo ' set-lang';}?>" data-lang="ru">RU</span>
            </div>
         </div>
         <div class="pp-el">
            <a href="article.php" class="pp-a">СТАТЬИ</a>
         </div>
         <div class="pp-el">
            <a href="#kont" class="pp-a">КОНТАКТЫ</a>
         </div>
      </div>
      <script>
         $(document).ready(function() {
            $(window).resize();
         });
         $(window).resize(function() {
            $('#header').height(parseInt($(this).width()/2.331));
            $('.hdr-menu-el').height(parseInt($(this).width()/30));
            $('.hdr-menu-logo').height(parseInt($(this).width()/10));
            $('.before-ftr-line').height(parseInt($(this).width()/17));
            $('.cn-cell-box').height(parseInt($(this).width()/3));
            $('#popup-menu').height(parseInt($(this).width()/8));
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
               $('div').find('[data-lang="lv"]').addClass('set-lang');
            } else {
               $('div').find('[data-lang="ru"]').addClass('set-lang');
            }
         });
         $('.cn-cell-box').mouseover(function() {
            $(this).stop().animate({
               opacity: '.7'
            }, 300);
         });
         $('.cn-cell-box').mouseout(function() {
            $(this).stop().animate({
               opacity: '1'
            }, 300);
         });
         $('.anim').mouseover(function() {
            $(this).children('.gal').show().stop(true).animate({
               opacity: 1,
               marginTop: '5%'
            }, 300);
         });
         $('.anim').mouseout(function() {
            $(this).children('.gal').stop(true).animate({
               opacity: 0,
               marginTop: '25%'
            }, 300).delay(1).hide(0);
         });
         var popupShow = false;
         var scrollLast = 0;
         $(window).scroll(function(){
            $('.go_down').hide();
            var ppHeight = $('#popup-menu').height();
            if (($(this).scrollTop() > ($(this).width()/3.3)) && ($(this).scrollTop() < scrollLast)) {
               if (!popupShow) {
                  popupShow = true;
                  $('#popup-menu').css({top: -ppHeight}).show().animate({top: 0}, 300);
               }
            } else {
               if (popupShow) {
                  popupShow = false;
                  $('#popup-menu').animate({top: -ppHeight}, 300).hide(1);
               }
            }
            scrollLast = $(this).scrollTop();
         });
      </script>
   </body>
</html>