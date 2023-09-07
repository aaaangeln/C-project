<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="#" method="post">
	выберите ID по которому будем заменять:  <input type="text" name="id" /><br />
    Скидка на которую будем заменять:  <input type="text" name="skid" /><br />
	Информация о нашей скидке:   <input type="text" name="inform" /><br />
	ID нашей категории к которой будет относится скидка:  <input type="text" name="category" /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>
	
	</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bd";

// Создать соединение
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Проверьте подключение
if (!$conn) {
  die("Ошибка подключения: " . mysqli_connect_error());
}

$id = $_POST['id'];
$skid= $_POST['skid'];
$category = $_POST['category'];
$inform = $_POST['inform'];

$sql = "UPDATE skid SET skid='$skid', category='$category', inform='$inform' WHERE id='$id'";


if (mysqli_query($conn, $sql)) {
  echo "Запись успешно обновлена";
} else {
  echo "Ошибка обновления записи: " . mysqli_error($conn);
}

mysqli_close($conn);
?>