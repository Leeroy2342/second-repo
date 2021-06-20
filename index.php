<?php
$db = parse_url(getenv("DATABASE_URL"));
echo $db;
$link=mysqli_connect($db);
if ($link)
echo 'Успешно';
else die('Ошибка');
mysqli_close($link);
?>
