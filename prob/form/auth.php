<?php 
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

$pass = md5($pass."poirety234sde");

$mysql = new mysqli('localhost', 'root', 'root', 'bd');

$res = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
$user = $res->fetch_assoc();
if(count($user)==0){
    
    echo <<<HTML
		<script>
        alert("Такой пользователь не найден или неверный пароль");
         window.close("http://localhost:8888/prob/form/auth.php");
        window.open("http://localhost:8888/prob/auth.html");
        </script>

HTML;
    exit();
}else{
	header('Location: /prob/index.php');
}


setcookie('user', $user['login'], time()+3600, "/");

$mysql->close();

header('Location: /prob/index.php');
?>