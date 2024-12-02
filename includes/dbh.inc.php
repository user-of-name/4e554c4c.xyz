<?php

$dsn = "mysql:host=192.168.1.135:3306;dbname=null_db";
$dbusername = "null";
$dbpassword = "EEQ1ip9CR1rAEH";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
 catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}