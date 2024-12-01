<?php

$dsn = "mysql:host=webhost;dbname=null_db";
$dbusername = "root";
$dbpassword = "root";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

echo SELECT title FROM site_content;
