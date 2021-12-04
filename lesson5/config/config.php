<?php
/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'phpgb');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT', "../");
define('WWW_ROOT', SITE_ROOT . '/public');
$db = mysqli_connect(HOST,USER,PASS,DB) or die('Проблемы с подключением к базе!');
?>
