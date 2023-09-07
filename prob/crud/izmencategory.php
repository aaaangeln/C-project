<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="#" method="post">
	выберите ID по которому будем заменять:  <input type="text" name="id" /><br />
    Категория на которую будем заменять:  <input type="text" name="category" /><br />
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

$cat= $_POST['category'];
$id = $_POST['id'];

$sql = "UPDATE category SET category='$cat' WHERE id='$id'";


if (mysqli_query($conn, $sql)) {
  echo "Запись успешно обновлена";
} else {
  echo "Ошибка обновления записи: " . mysqli_error($conn);
}

mysqli_close($conn);
?>