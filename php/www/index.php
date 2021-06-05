<?php
require_once 'connection.php';
$link = mysqli_connect($host,$user,$password,$database);
if($link)
echo 'Соединение установлено';
else
die('Ошибка подключения');
mysqli_close($link);
?>
