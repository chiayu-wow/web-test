<?php
DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','auth');
DEFINE('DB_PASSWORD','yoyo27653152');
DEFINE('DB_NAME','Auth');

$dbc=@mysqli_connect(DB_HOST , DB_USER,DB_PASSWORD,DB_NAME)
OR die('Could not connect to sql : ' .
mysqli_connect_error());
?>