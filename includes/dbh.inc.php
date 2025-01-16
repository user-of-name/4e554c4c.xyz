<?php

$dsn = "mysql:host=100.83.88.95:3306;dbname=null_db";
$dbusername = "4e554c4c";
$dbpassword = "X0tOC94R9qH8Ak1O14EEwFVhkTT";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
 catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}