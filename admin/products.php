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
       <div class="container m-5"></div>
       <h1>Welcome to Product Management Page</h1>
        <form action="">
            <div class="d-flex flex-row-reverse m-5">
                <button type="button" class="btn btn-success">Add Product</button>
            </div>
            <div class="input-group ml-5 mb-3">
  <select class="form-select" id="inputGroupSelect04" aria-label="Select a product with two button addons">
    <option selected>Select a product</option>
    <!-- connect to db to make sure the number of options matches the number of products in a DB-->
    <!-- foreach loop -->
    <option value="1">Product One name</option>
    <option value="2">Product Two name</option>
    <option value="3">Product Three name</option>
  </select>
  <button class="btn btn-outline-secondary btn-warning" type="button">Edit</button>
   <!-- Button trigger modal -->
  <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
</div>
        </form>
    </div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="deleteModalLabel">Alert</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body container-fluid">
        <h6 class="text-center">Are you sure you want to delete this product?</h6>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-secondary">Yes</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>