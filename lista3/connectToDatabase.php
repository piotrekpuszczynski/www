<?php
$servername = "localhost";
$username = "root";
$password = "QwertyuioP123";

try {
    $db = new PDO("mysql:host=$servername;dbname=wwwlist3", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection error: " . $e->getMessage();
}