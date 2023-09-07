<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
	<style>
	input{
    color: black;
    text-align: center;
    text-decoration: none;
    display: flex;
    font-size: 20px;	
		}
		form{
			display: inline-block;
			margin-left: 100px;
		}
		p{
			font-size: 16px;
		}
		
	</style>
</head>
<body>
<form action="foo.php" method="post">
<!--	category-->
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="category">CATEGORY:</label>
        <input type="text" name="category" id="category">
    </p>
    <input  type="submit" value="Отправить"><br><br>
	</form>
<!--	brend-->
<form action="foob.php" method="post">
	<p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="brend">BREND:</label>
        <input type="text" name="brend" id="brend">
    </p>
	<p>
        <label for="id_category">ID_CATEGORY:</label>
        <input type="text" name="id_category" id="id_category">
    </p>
    <input type="submit" value="Отправить"><br><br>
</form>
	<!--	skidka-->
<form action="foos.php" method="post">
	<p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="skid">SKIDKA:</label>
        <input type="text" name="skid" id="skid">
    </p>
	<p>
        <label for="inform">INFORM:</label>
        <input type="text" name="inform" id="inform">
    </p>
	<p>
        <label for="category">CATEGORY:</label>
        <input type="text" name="category" id="category">
    </p>
    <input type="submit" value="Отправить"><br><br>
</form>
</body>
</html>
