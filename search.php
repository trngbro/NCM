<?php
// config
define("DB_HOST", "localhost");
define("DB_NAME", "music");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// kết nối
try {
  $pdo = new PDO(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

// tìm kiếm
$stmt = $pdo->prepare("SELECT * FROM `songs` WHERE `tag` LIKE ? OR `lyrics` LIKE ?");
$stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
$results = $stmt->fetchAll();
if (isset($_POST["ajax"])) { echo json_encode($results); }