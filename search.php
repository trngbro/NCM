<?php

// Thực hiện truy vấn search

@include 'config.php';

$stmt = $pdo->prepare("SELECT * FROM `songs` WHERE `tag` LIKE ? OR `lyrics` LIKE ?");
$stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
$results = $stmt->fetchAll();
if (isset($_POST["ajax"])) { echo json_encode($results); }

?>