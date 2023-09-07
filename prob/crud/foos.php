<?php
/* Попытка подключения к серверу MySQL. Предполагая, что вы используете MySQL
 сервер с настройкой по умолчанию (пользователь root без пароля) */
$link = mysqli_connect("localhost", "root", "root", "bd");
 
// Проверьте подключение
if($link === false){
    die("ERROR: Нет подключения. " . mysqli_connect_error());
}
//  skidka
$id_s = mysqli_real_escape_string($link, $_REQUEST['id']);
$skid = mysqli_real_escape_string($link, $_REQUEST['skid']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$inform= mysqli_real_escape_string($link, $_REQUEST['inform']);
 
// Попытка выполнения запроса вставки
$sql = "INSERT INTO `skid`(`id`, `skid`,`inform`, `category`) VALUES ('$id_s','$skid','$inform','$category')";
if(mysqli_query($link, $sql)){
    echo "Записи успешно добавлены.";
	header("Location: add.php");
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
}
 
// Закрыть соединение
mysqli_close($link);
?>
