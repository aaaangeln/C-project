<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Cтраница для админа</title>
	<style>
		button{
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;	
		}
	</style>
</head>
<body>
	<form action="add.php" method="post">
		<button type="submit">Добавить данные в таблицы</button>
            </form>
	<form action="delc.php" method="post">
	<button type="submit"><a href="delc.php"></a>Удалить данные из таблиц</button>
		</form>
	<form action="izmencategory.php" method="post">
	<button type="submit"><a href="izmencategory.php"></a>Редактировать данные в таблицы категории</button>
	</form>
	<form action="izmenbrend.php" method="post">
	<button type="submit"><a href="izmenbrend.php"></a>Редактировать данные в таблицы бренды</button>
	</form>
	<form action="izmenskidka.php" method="post">
	<button type="submit"><a href="izmenskidka.php"></a>Редактировать данные в таблицы скидки</button>
</form>
	
	
	
	
	
	</body>
</html>