<?php

//fetch_cart.php

session_start();

$total = 0;

$output = '';
if(!empty($_SESSION["list_play"]))
{
	foreach($_SESSION["list_play"] as $keys => $values)
	{
		$output .= '
        <div class="row text-right" style="width:100%; height:100px">
			<li class="item col-10" >
				<p><b>'.$values["filename"].'</b></p>
				<p>'.$values["filesinger"].'</p>
			</li>
			<button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto; background-color:#" id="'. $values["id"].'">Xoá</button>
		</div>
		';
		$total += 1;
	}
}
else
{
	$output .= '
	<div class="row text-right" style="width:100%; height:100px">
		<p>Không có bài hát nào để chơi</p>	
	</div>
	';
}
$data = array(
	'details'	=>	$output,
	'total'		=>	$total
);	

echo json_encode($data);

?>