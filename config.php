<?php

    try {
        $pdo = new PDO(
            "mysql:host=localhost;charset=utf8;dbname=music","root","", 
            [   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);
        $conn = mysqli_connect('localhost','root','','music');
    } catch (Exception $ex) { exit($ex->getMessage()); }

?>