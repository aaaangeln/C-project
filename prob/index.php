<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM `category`");


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
        <title>Сайт скидок</title>
    </head>
    <body>
    <div class = "header">
        <div class="container">
            <div class = "header-line">
                <div class="id" style="text-align: center">
                    <p>dlScoUnT_AnNeX</p>
                </div> 
                <div class="header-logo">
                    <img src="png/logo.png" alt="">
                </div>
                <div class="nav">
                    <a class="nav-items" href="categorii.php">Категории</a>
                    <a class="nav-items" href="brend.php">Бренды</a>
                    <a class="nav-items" href="skidki.php">Скидки</a>
                </div>
                <div class="logo">
                   <img src="png/logo.png" alt=""> 
                </div>
            </div>
			<div class="center">
            <p class ="png1">
				<img src="png/image%203.png" width="450" height="380" hspace="100px" alt="">
				<img src="png/image%205.png" width="420" height="366" hspace="100px" alt="">
				<img src="png/image%204.png" width="410" height="336" hspace="180px" alt="">
				<img src="png/image%206.png" width="420" height="336" hspace="80px" alt="">
			</p>
			</div>
        </div>    
    </div>

    </body>
</html>