<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$link = mysqli_connect($url);

if ($link)
echo 'Успешно';
else die('Ошибка');
mysqli_close($link);
?>
