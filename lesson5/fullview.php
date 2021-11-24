<?php
require_once 'config/config.php';

$query=mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM pic WHERE id = {$_GET['id']}")) ;

mysqli_query($db,"UPDATE pic SET `counts`='".++$query['counts']."' WHERE id = {$_GET['id']}");
echo "<img src='img/full/{$query['name']}'><br> ";
echo "<div>Имя файла: {$query['name']} <br>Размер: {$query['size']} <br>Просмотров: {$query['counts']}";