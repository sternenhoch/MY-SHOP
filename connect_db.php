<?php
function connect_db($host, $username, $password, $port, $db){
    $dsn = "mysql:dbname=$db;host=$host;port=$port";
    try { 
        $pdo = new PDO($dsn, $username, $password);
        echo "Connection established".PHP_EOL;
        return $pdo;
    } 
    catch (PDOException $error) {
        echo "PDO Error: " . $error->getMessage() . PHP_EOL;
    }
}

$pdo = connect_db("127.0.0.1", "mm", "mm", "3306", "my_shop");
var_dump($pdo);