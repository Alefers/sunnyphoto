<?php
session_start();
if ($_POST['lang'] === 'ru' || $_POST['lang'] === 'lv') {
   $_SESSION['lang'] = $_POST['lang'];
}