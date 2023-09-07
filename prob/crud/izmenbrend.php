<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="#" method="post">
	выберите ID по которому будем заменять:  <input type="text" name="id" /><br />
    Бренд на который бужем заменять:  <input type="text" name="brend" /><br />
	ID нашей категории к которой будет относится бренд:  <input type="text" name="id_category" /><br />
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
$brend= $_POST['brend'];
$category_id = $_POST['id_category'];

$sql = "UPDATE brend SET brend='$brend', id_category='$category_id' WHERE id='$id'";


if (mysqli_query($conn, $sql)) {
  echo "Запись успешно обновлена";
} else {
  echo "Ошибка обновления записи: " . mysqli_error($conn);
}

mysqli_close($conn);
?>