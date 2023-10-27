<?php
include "connect_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="my_shop_style.css">
  <title>Products</title>
</head>

<body>
  <?php
  include("navbar.php");
  ?>
  <div class="container m-5"></div>
  <h1>Welcome to Product Management Page</h1>
  <form action="">
    <div class="d-flex flex-row-reverse m-5">
      <button type="button" class="btn btn-success">Add Product</button>
    </div>
      <?php
      $pdo = connect_db("127.0.0.1", "mm", "mm", "3306", "my_shop");
      //read the data from products
      $ma_requete = "SELECT * FROM products";
      $mon_pdo_statement = $pdo->query($ma_requete);
      $result = $mon_pdo_statement->fetchAll();
      //foreach loop
      foreach ($result as $product) {
        echo '<div class="input-group mb-3">
        <textarea id="product_name" name="product_name" rows="1" cols="33">'
        . $product['name'] . $product["id"] .
        '</textarea>
        <button class="btn btn-warning" type="submit">Edit</button>
        <button class="btn btn-danger" type="submit">Delete</button></div>';
      }
      ?>
    </div>
  </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>