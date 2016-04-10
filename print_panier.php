<?php
session_start(); 
	function print_panier()
	{
		if($_SESSION['panier'])
		{
		 $mytab= unserialize(file_get_contents("database/element"));
		foreach ($_SESSION['panier'] as $elem)
		 {
		 	$name = $elem;
		 	foreach($mytab as $thename)
		 	{
		 		if($name === $thename['name'])
		 		{
		 		$link = $thename['link'];
		 		$price = $thename['price'];
		 		$name= $thename['name'];
		 		echo"<div class= 'datapanier'><img id= 'small' SRC = $link><i id='theprice'>Price: $price €<br />Name: $name</i></div>";
		 		}
		 	}
		}
		}
	}
?>