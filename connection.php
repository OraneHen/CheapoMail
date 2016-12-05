<?php

$host = "localhost";
$user = "orane";
$pass ="";
$db="CheapoDB";

mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db);

?>