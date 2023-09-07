<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
if(mb_strlen($login)<3 || mb_strlen($login)>60){
    echo <<<HTML
		<script>
        alert("Недопустимая длина логина");
window.close("http://localhost:8888/prob/form/index.php");
 window.open("http://localhost:8888/prob/index.html");
        </script>
HTML;
    exit();
}else if(mb_strlen($pass)<8 || mb_strlen($pass)>32){
    echo <<<HTML
		<script>
        alert("Недопустимая длина пароля");
window.close("http://localhost:8888/prob/form/index.php");
 window.open("http://localhost:8888/prob/index.html");
        </script>
HTML;
    exit();
}
   
    

$pass = md5($pass."poirety234sde");
$pass2 = md5($pass2."poirety234sde");

$mysql = new mysqli('localhost', 'root', 'root', 'bd');
$mysql->query("INSERT INTO `users` (`login`, `pass`) VALUES('$login', '$pass')");
$mysql->close();

header('Location: /prob/auth.html');

?>