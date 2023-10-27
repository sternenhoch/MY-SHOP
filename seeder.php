<?php

include("connect_db.php");

$pdo = connect_db("127.0.0.1", "mm", "mm", "3306", "my_shop");

//créer les produits
$ma_requete = $pdo->prepare("INSERT INTO products (id, name, price, category_id) values (1, 'Bonsai tree', 39.99, 1)");
$ma_requete->execute();
$ma_requete = $pdo->prepare("INSERT INTO products (id, name, price, category_id) values (2, 'Daisy', 8.99, 2)");
$ma_requete->execute();
$ma_requete = $pdo->prepare("INSERT INTO products (id, name, price, category_id) values (3, 'Rose', 8.99, 2)");
$ma_requete->execute();
$ma_requete = $pdo->prepare("INSERT INTO products (id, name, price, category_id) values (4, 'Tomato', 12.99, 3)");
$ma_requete->execute();

//créer les categories
$ma_requete = $pdo->prepare("INSERT INTO categories (id, name, parent_id) values (1, 'bonsai', 0)");
$ma_requete->execute();
$ma_requete = $pdo->prepare("INSERT INTO categories (id, name, parent_id) values (2, 'flower', 0)");
$ma_requete->execute();
$ma_requete = $pdo->prepare("INSERT INTO categories (id, name, parent_id) values (3, 'vegetable', 0)");
$ma_requete->execute();
$ma_requete = $pdo->prepare("INSERT INTO categories (id, name, parent_id) values (4, 'succulent', 0)");
$ma_requete->execute();