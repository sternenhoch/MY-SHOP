<?php
include "connect_db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function get_data() {
    //verify entered data
    if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["product_name"])) {
        echo "Invalid product name" . "<br>";
        return false;
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["product_description"])) {
            echo "Invalid product description" . "<br>";
            return false;
    }
    return array(
        "name" => $_POST['product_name'],
        "description" => $_POST['product_description'],
        "image" => $_POST['product_image'],
        "price" => $_POST['price']
      );
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="my_shop_style.css">
  <title>Product details</title>
</head>
<body>
    <form class="form-product" action="product_details.php" method="post">
    <div class="form-group row m-3">
      <label for="product_name" class="col-sm-1 col-form-label">Product name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="product_name" placeholder="Product name" required>
      </div>
    </div>
    <div class="form-group row m-3">
      <label for="product_description" class="col-sm-1 col-form-label">Product description</label>
      <div class="col-sm-6">
      <textarea class="form-control" name="product_description" rows="3" required></textarea>
      </div>
    </div>
    <div class="form-group row m-3">
        <label for="product_image" class="form-label" required>Product image</label>
        <div class="col-sm-6">
        <input class="form-control" type="file" name="product_image">
        </div>
    </div>
    <div class="form-group row m-3">
    <select class="form-select form-select-sm" aria-label="Small select example">
  <option selected>Price</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
</select>
    </div>
    <div class="form-group row m-3">
    <div class="col-sm-6">
      <button type="submit" class="btn btn-dark">Add product</button>
    </div>
    </div>
</form>
<!--including basic Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>