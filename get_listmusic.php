<?php


include('config.php');

$query = "SELECT * FROM songs ORDER BY id DESC";

$statement = $pdo->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
        <div class="row text-right" style="width:100%; height:100px">
            <li class="item col-10" >
                <p><b>' . $row["name"] . '</b></p>
                <p>' . $row["singer"] . '</p>
            </li>
            <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;">Xoá</button>
        </div>
		';
	}
	echo $output;
}


?>