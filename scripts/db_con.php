<?php
$db = mysqli_connect("localhost", "sunny_all", "123456", "sunnyphoto") or exit("Error :" . mysqli_error($db));
mysqli_set_charset($db, 'UTF8');