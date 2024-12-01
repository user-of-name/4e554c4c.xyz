<?php

$dsn = "mysql:host=webhost;dbname=null_db";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRMODE_EXCEPTION )
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}