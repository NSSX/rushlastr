<?php
session_start();
	function print_prod()
	{
		if($_GET['cat'] !== "activi" &&  $_GET['cat'] !== "transport" && $_GET['cat'] !== "logement")
		{
		if(file_exists("database/element"))
			{
				$mytab= unserialize(file_get_contents("database/element"));
				foreach($mytab as $elem)
				{
					if($_SESSION['dest'] === $elem['destination'])
					{
						$link = $elem['link'];
						echo"<div class= 'dataelem'><img class = 'imgelem' SRC = $link></div";
					}
				}
			}
		}
		else
		{
				if(file_exists("database/element"))
				{
					$mytab= unserialize(file_get_contents("database/element"));
					foreach($mytab as $elem)
					{
						if($elem['cat'] === $_GET['cat'] && ($_SESSION['dest'] === $elem['destination'] || $_SESSION['dest'] === "all"))
						{
							$link = $elem['link'];
							echo"<div class= 'dataelem'><img class = 'imgelem' SRC = $link></div>";
						}

					}
				}
		}
	}
?>