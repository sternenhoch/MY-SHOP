<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="my_shop_style.css">
    <title>Admin page</title>
</head>

<body>
<?php
include("navbar.php");
?>

<div class="container pt-5">
    <div class="row justify-content-around">
        <a class="btn mt-5 col-md-4 btn-lg btn-dark" href="./admin/users.php" role="button">Manage users</a>
        <a class="btn mt-5 col-md-4 btn-lg btn-dark" href="./admin/products.php" role="button">Manage products</a>
    </div>
</div>

<!--including basic Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>