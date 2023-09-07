<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM `skid` WHERE `category` = 1");
$result2 = mysqli_query($link, "SELECT * FROM `skid` WHERE `category` = 2");
$result3 = mysqli_query($link, "SELECT * FROM `skid` WHERE `category` = 3");
$result4 = mysqli_query($link, "SELECT * FROM `skid` WHERE `category` = 4");
$result5 = mysqli_query($link, "SELECT * FROM `skid` WHERE `category` = 5");
$result6 = mysqli_query($link, "SELECT * FROM `skid` WHERE `category` = 6");

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
        <title>Cкидки</title>
</head>
<body>
    <div class = "header">
        <div class="container">
            <div class = "header-line">
                <div class="id" style="text-align: center">
<!--					<p>dlScoUnT_AnNeX</p>-->
                </div> 
				<div class="header-logo">
                    <img src="png/logo.png" alt="">
				</div>
				<div class="nav-item">
					<h1>Скидки</h1>
				</div>
                <div class="back">
                    <a href="index.php"><img src="png/591845.png" alt="" width="40px" height="40px"></a>
				</div>
            </div>
			<div class="nav-item">
					<h1>Скидки в ресторанах</h1>
				</div>
			<div class="row">
				<div class="col-md-12" >
					<div class="menu" align="rigth">
						<a href="promo.php">
							<?php while($skidka=mysqli_fetch_assoc($result))
   								{
							?>
							<li><?php echo $skidka['skid']; echo $skidka['inform']; ?></li>
							<?php 
							 }
							?></a>
						<div class="nav-item">
					<h1>Скидки в кафе</h1>
				</div>
							<a href="promo.php">
							<?php while($skidka=mysqli_fetch_assoc($result2))
   								{
							?>
								<li><?php echo $skidka['skid']; echo $skidka['inform']; ?></li>
								<?php 
							 }
							?>
							</a>
						<div class="nav-item">
					<h1>Скидки в фитнес-центры</h1>
							<a href="promo.php">
							<?php while($skidka=mysqli_fetch_assoc($result3))
   								{
							?>
								<li><?php echo $skidka['skid']; echo $skidka['inform']; ?></li>
								<?php 
							 }
							?>
							</a>
				</div>
						<div class="nav-item">
					<h1>Скидки на развлечения</h1>
							<a href="promo.php">
							<?php while($skidka=mysqli_fetch_assoc($result4))
   								{
							?>
								<li><?php echo $skidka['skid']; echo $skidka['inform']; ?></li>
								<?php 
							 }
							?>
							</a>
				</div>
						<div class="nav-item">
					<h1>Скидки в клубы</h1>
							<a href="promo.php">
							<?php while($skidka=mysqli_fetch_assoc($result5))
   								{
							?>
								<li><?php echo $skidka['skid']; echo $skidka['inform']; ?></li>
								<?php 
							 }
							?>
							</a>
				</div>
						<div class="nav-item">
					<h1>Скидки в СПА</h1>
							<a href="promo.php">
							<?php while($skidka=mysqli_fetch_assoc($result6))
   								{
							?>
								<li><?php echo $skidka['skid']; echo $skidka['inform']; ?></li>
								<?php 
							 }
							?>
							</a>
				</div>
						
					</div>
				</div>
			</div>	
        </div>    
    </div>

</body>
</html>