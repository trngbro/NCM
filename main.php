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
					'price'            =>     $_POST["price"],  
					'quantity'         =>     $_POST["quantity"]
				);
				$_SESSION["list_play"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'id'               =>     $_POST["id"],  
				'name'             =>     $_POST["name"],  
				'price'            =>     $_POST["price"],  
				'quantity'         =>     $_POST["quantity"]
			);
			$_SESSION["list_play"][] = $item_array;
		}
	}

	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["id"] == $_POST["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping_cart"]);
	}
}

?>