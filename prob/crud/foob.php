<?php
/* Попытка подключения к серверу MySQL. Предполагая, что вы используете MySQL
 сервер с настройкой по умолчанию (пользователь root без пароля) */
$link = mysqli_connect("localhost", "root", "root", "bd");
 
// Проверьте подключение
if($link === false){
    die("ERROR: Нет подключения. " . mysqli_connect_error());
}
//  brend
$id_b = mysqli_real_escape_string($link, $_REQUEST['id']);
$brend = mysqli_real_escape_string($link, $_REQUEST['brend']);
$id_category = mysqli_real_escape_string($link, $_REQUEST['id_category']);
 
// Попытка выполнения запроса вставки
$sql = "INSERT INTO `brend`(`id`, `brend`, `id_category`) VALUES ('$id_b','$brend','$id_category')";
if(mysqli_query($link, $sql)){
    echo "Записи успешно добавлены.";
	header("Location: add.php");
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
}
 
// Закрыть соединение
mysqli_close($link);
?>
