<?php
$link = mysqli_connect($MYSQL_NAME, $MYSQL_USER, $MYSQL_PASSWORD, $MYSQL_DATABASE, $EXTERNAL_SQL_PORT)
or die("Error " . mysqli_error($link));
echo "connected successfully";
mysqli_close($link);
?>
