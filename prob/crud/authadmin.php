<?php 
$login = $_POST['loginadmin'];
$pass = $_POST['passadmin'];
$adpass='adminadmin';
$ad='admin';


if($login==$ad and $pass==$adpass){
   header('Location: /prob/crud/admin.php');
}else{
	echo <<<HTML
		<script>
        alert("Такой пользователь не найден или неверный пароль");
         window.close("http://localhost:8888/prob/crud/authadmin.php");
        window.open("http://localhost:8888/prob/crud/adminad.php");
        </script>

HTML;
    exit();
}


?>