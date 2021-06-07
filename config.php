<?php
$bd_server = 'localhost'; $bd_login = 'f0547640_mrender122'; $bd_pass = 'MrEnDeR122'; $bd_name = 'f0547640_mrender122';
$bsd = mysqli_connect($bd_server, $bd_login, $bd_pass)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных!</p>");
mysqli_select_db($bsd, $bd_name)//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных!</p>");
mysqli_query($bsd, "SET NAMES utf8");

$selectinfo = mysqli_query($bsd, "SELECT * FROM `config` WHERE id='1'");
if ( $si = $selectinfo->fetch_array() ){
$sitename = $si['name'];
$sitedomain = $si['domain'];
$vkgroup = $si['vkgroup'];
$vkgtoken = $si['vktoken'];
$vkgid = $si['vkid'];
$chatunbansum = $si['chatunbansum'];
$standartbonus = $si['standartbonus'];
$changenicksum = $si['changenicksum'];
$changecolorsum = $si['changecolorsum'];
$minvivod = $si['minvivod'];
$minbet = $si['minbet'];
$maxbet = $si['maxbet'];
$merchant_id = $si['merchant_id'];
$recaptchasecret = $si['recaptchasecretkey'];
$recaptchasite = $si['recaptchasitekey'];
$merchant_secret_1 = $si['merchant_secret_1'];
$merchant_secret_2 = $si['merchant_secret_2'];
$refsum = $si['refsum'];
}

?>