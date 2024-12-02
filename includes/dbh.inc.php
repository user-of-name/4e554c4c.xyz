<?php

$dsn = "mysql:host=localhost;dbname=null_db";
$dbusername = "null";
$dbpassword = "EEQ1ip9CR1rAEH";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRMODE_EXCEPTION )
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}