<?php
$link = pg_connect(getenv("DATABASE_URL"))
or die("Невозможно подключиться к БД");
echo "Успешно подключено к БД";
pg_close($link);
?>
