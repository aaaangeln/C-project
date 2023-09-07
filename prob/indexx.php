<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM `category`");

$result2 = mysqli_query($link, "SELECT * FROM `brend` WHERE `id_category` = 2");

while($brend=mysqli_fetch_assoc($result2)){
	echo $brend['brend'];
}
//echo $category['id'];
//echo $category['category'];
//echo $brend['id_category'];
//echo $brend['brend'];

?>


<!--SELECT 'brend' FROM `category`, `brend` WHERE `id_category = category.id`-->

