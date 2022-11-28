<?php

session_start();

$total = 0;

$output = '';
if(!empty($_SESSION["list_play"]))
{
	foreach($_SESSION["list_play"] as $keys => $values)
	{
		$output .= '
			<li class="item col-10 musicin" >
				<p><b>'.$values["name"].'</b></p>
				<p>'.$values["singer"].'</p>
				<input type="hidden" id="music'.$values["id"].'" value="'.$values["music"].'" />
				<input type="hidden" id="id'.$values["id"].'" value="'.$values["id"].'" />
			</li>
			<button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="'. $values["id"].'">Xoá</button>
		';
		$total += 1;
	}
}
else
{
	$output .= ' 	
	<li class="row norow" value="empty" style="width:100%; height:100px; padding-top:20px">
		<p>Không có bài hát nào để phát!</p>	
	</li>
	';
}

$data = array(
	'details'	=>	$output,
	'total'		=>	$total
);	

echo json_encode($data);

?>