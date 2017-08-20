<?php
switch ($_SERVER['SERVER_NAME']) {
    case 'localhost':
      $db = mysqli_connect("localhost", "sunny_all", "123456", "sunnyphoto") or exit("Error :" . mysqli_error($db));
      mysqli_set_charset($db, 'UTF8');
      break;
    case 'alefers.lv':
      $db = mysqli_connect("localhost", "alefers_db", "hfp,bk12cn`rjk", "alefers_fpp") or exit("Error :" . mysqli_error($db));
      mysqli_set_charset($db, 'UTF8');
      break;
}
mysqli_set_charset($db, 'UTF8');