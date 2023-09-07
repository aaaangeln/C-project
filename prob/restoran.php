<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM `brend` WHERE `id_category` = 1");

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
        <title>Рестораны</title>
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
					<h1>Бренды</h1>
					<h2>Категория: Рестораны</h2>
				</div>
                <div class="back">
                    <a href="index.php"><img src="png/591845.png" alt="" width="40px" height="40px"></a>
				</div>
            </div>
			<div class="row">
				<div class="col-md-r">
					<div class="menu">
								<ul>
								<?php
								    while($brend=mysqli_fetch_assoc($result)){
								?>
									<li><a href="skidki.php"><?php echo $brend['brend']; ?></a></li>
									<?php
									}
									?>
						</ul>
					</div>
				</div>
			</div>
			
				
        </div>    
    </div>

</body>
</html>