<?php
function loadHeader($arg) {
?>
<!doctype html>
<html lang="ru">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Свадебный и семейный фотограф</title>
      <link rel="stylesheet" href="design/<?php echo $arg;?>.css" type="text/css" />
      <link rel="icon" type="image/x-icon" href="design/favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   </head>
<?php
}