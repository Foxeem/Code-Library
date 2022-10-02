<?php
include "head.php";
	echo "<br><br><br><br><br><br>";
	$page = (isset($_GET["page"])) ? $_GET["page"] : -1;
switch ($page){
    case "About":
        include "about.php";
        break;
    case "Products":
        include "product.php";
        break;
    case "Promos":
        include "promo.php";
        break;
    default:
        echo "<h1 align='center'> Welcome user! </h1><br><br>";
	}
	echo "<br><br><br><br><br><br>";
include "foot.php";
?>