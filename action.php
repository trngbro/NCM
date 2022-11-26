<?php

//action.php

session_start();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "add_to_play")
	{
		if(isset($_SESSION["list_play"]))
		{
			$is_available = 0;
			foreach($_SESSION["list_play"] as $keys => $values)
			{
				if($_SESSION["list_play"][$keys]['id'] == $_POST["id"])
				{
					$is_available++;
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'id'               =>     $_POST["id"],  
					'name'             =>     $_POST["name"],  
					'singer'            =>     $_POST["singer"]
				);
				$_SESSION["list_play"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'id'               =>     $_POST["id"],  
				'name'             =>     $_POST["name"],  
				'singer'            =>     $_POST["siner"]
			);
			$_SESSION["list_play"][] = $item_array;
		}
	}

	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["list_play"] as $keys => $values)
		{
			if($values["id"] == $_POST["id"])
			{
				unset($_SESSION["list_play"][$keys]);
			}
		}
	}

	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["list_play"]);
	}
}

?>