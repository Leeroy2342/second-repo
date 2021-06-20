<?php
$url = parse_url(getenv("DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$link = mysqli_connect($server, $username, $password, $db);

if ($link)
echo 'Успешно';
else die('Ошибка');
mysqli_close($link);
?>
