<?php
function connect_db($host, $username, $password, $port, $db){
    $dsn = "mysql:dbname=$db;host=$host;port=$port";
    try { 
        $pdo = new PDO($dsn, $username, $password);
        return $pdo;
    } 
    catch (PDOException $error) {
        echo "PDO Error: " . $error->getMessage() . PHP_EOL;
    }
    echo "Connection established";
}

connect_db("127.0.01", "mm", "mm", "3306", "my_shop");