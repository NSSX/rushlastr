<?php
	if(!$_POST['name'] || $_POST['submit'] != "OK")
	{
		echo"ERROR\n";
	}
	else
	{
	$name = $_POST['name'];
		if(file_exists("database/dest"))
		{
			$mytab= unserialize(file_get_contents("database/dest"));
			$i = 0;
			foreach($mytab as $elem)
			{
				if($elem['name'] === $name)
				{
					unset($mytab[$i]);
					$mytab = array_merge(array(),$mytab);
					$mytab = serialize($mytab);
					file_put_contents("database/dest",$mytab);
					echo"OK\n";
					exit;
				}
				$i++;
			}
		
		}
	}
	echo"ERROR\n";
?>