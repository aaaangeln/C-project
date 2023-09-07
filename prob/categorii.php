<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = 1");
$result2 = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = 2");
$result3 = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = 3");
$result4 = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = 4");
$result5 = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = 5");
$result6 = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = 6");

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
        <title>Категории</title>
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
				<div class="nav-item">
					<h1>Категории</h1>
				</div>
                <div class="back">
                    <a href="index.php"><img src="png/591845.png" alt="" width="40px" height="40px"></a>
				</div>
            </div>
			<div class="row">
				<div class="col-md-r">
					<div class="menu">
								<ul><li><a href="restoran.php"><?php $category=mysqli_fetch_assoc($result); echo $category['category']; ?></a></li>
								<li><a href="kafe.php"><?php $category=mysqli_fetch_assoc($result2); echo $category['category']; ?></a></li>
								<li><a href="fitness.php"><?php $category=mysqli_fetch_assoc($result3); echo $category['category']; ?></a></li>
								<li><a href="razvlechenia.php"><?php $category=mysqli_fetch_assoc($result4); echo $category['category']; ?></a></li>
						        <li><a href="club.php"><?php $category=mysqli_fetch_assoc($result5); echo $category['category']; ?></a></li>
								<li><a href="spa.php"><?php $category=mysqli_fetch_assoc($result6); echo $category['category']; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			
				
        </div>    
    </div>

</body>
</html>