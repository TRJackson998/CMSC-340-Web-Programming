<?php // login.php
$host = 'localhost';    // Change as necessary
$port = '3306';
$data = 'cmsc340'; // Change as necessary
$user = 'root';         // Change as necessary
$pass = 'mysql';        // Change as necessary
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;port=$port;dbname=$data;charset=$chrs";
$opts =
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
?>