<?php
require_once 'connection.php';
$link = mysqli_connect("db", $user, $password, $database)
or die("Error " . mysqli_error($link));
phpinfo();
mysqli_close($link);
?>
