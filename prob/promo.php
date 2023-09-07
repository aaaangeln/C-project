<?php

$rind =["B4AS532W","RTY2341T","Q12345PO","YUIPO94E","RTEBR54C","DFG23T5D","Y5U6H7N3","E123WERT","VCB3NMKD"];
$index = array_rand($rind, 1);
$random_name = $rind[$index];?>
		<script>
        alert("Ваш промокод: <?=$random_name?>");
			window.close("http://localhost:8888/prob/promo.php");
window.open("http://localhost:8888/prob/index.php");
        </script>
