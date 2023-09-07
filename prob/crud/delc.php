<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список таблиц и их данных в бд</h2>
<?php
$conn = new mysqli("localhost", "root", "root", "bd");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
	
	//category
$sql = "SELECT * FROM category";
if($result = $conn->query($sql)){
    echo "<table><tr><th>id</th><th>category</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td><form action='del.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
	
	
	
	
//brend	
	$sql = "SELECT * FROM brend";
if($result = $conn->query($sql)){
    echo "<table><tr><th>id</th><th>brend</th><th>id_category</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["brend"] . "</td>";
		    echo "<td>" . $row["id_category"] . "</td>";
            echo "<td><form action='del.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
	//skidki
	$sql = "SELECT * FROM skid";
if($result = $conn->query($sql)){
    echo "<table><tr><th>id</th><th>skid</th><th>inform</th><th>id_category</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["skid"] . "</td>";
		    echo "<td>" . $row["inform"] . "</td>";
		    echo "<td>" . $row["id_category"] . "</td>";
            echo "<td><form action='del.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>