<?php
function connect_db($host, $username, $password, $port, $db){
    $dsn = "mysql:dbname=$db;host=$host;port=$port";
    try { 
        $pdo = new PDO($dsn, $username, $password);
        echo "Connection established"."<br>";
        return $pdo;
    } 
    catch (PDOException $error) {
        echo "PDO Error: " . $error->getMessage() . PHP_EOL;
    }
}