<?php

$mysql = new mysqli('localhost', 'root', 'root', 'bd');

$res = mysql_query($mysql, "SELECT * FROM `users`");

while($food = mysql_fetch_assoc($res)){
    print_r($food);
    echo"<br>";
}


?>