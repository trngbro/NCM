<?php

session_start();

// Nếu được có action thì sẽ xem action đó là gì và truyền các tham số vào

if(isset($_POST["action"])) {
	// Nghe yêu cầu thêm bài nhạc mới thì sẽ truyền vào id, name, singer và music của bài nhạc đó vào itemarray
	if($_POST["action"] == "add_to_play") {
		if(isset($_SESSION["list_play"])) {
			$is_available = 0;
			foreach($_SESSION["list_play"] as $keys => $values) {
				if($_SESSION["list_play"][$keys]['id'] == $_POST["id"]) {
					$is_available++;
				}
			}
			if($is_available == 0) {
				$item_array = array(
					'id'       	=>	$_POST["id"],  
					'name'    	=> 	$_POST["name"],  
					'singer'   	=> 	$_POST["singer"],
					'music'		=>	$_POST["music"]
				);
				$_SESSION["list_play"][] = $item_array;
			}
		}
		else {
			$item_array = array(
				'id'       	=> 	$_POST["id"],  
				'name'    	=> 	$_POST["name"],  
				'singer'   	=> 	$_POST["singer"],
				'music'		=>  $_POST["music"]
			);
			$_SESSION["list_play"][] = $item_array;
		}
	}

	// Nghe yêu cầu xoá bài nhạc đó khỏi danh sách phát thì unset bài nhạc đó
	if($_POST["action"] == 'remove') {
		foreach($_SESSION["list_play"] as $keys => $values) {
			if($values["id"] == $_POST["id"]) {
				unset($_SESSION["list_play"][$keys]);
			}
		}
	}

	// 	if($_POST["action"] == 'empty') {
	// 		unset($_SESSION["list_play"]);
	// 	}
}

?>