<?php

$server = "localhost";
$login = "root";
$pass = "root";
$name = "bd";

$link = mysqli_connect($server, $login, $pass, $name);

if($link == False)
{
	echo "Соединение с БД";
}



?>