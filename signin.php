<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="my_shop_style.css">
    <title>Sign In</title>
</head>

<body>
<form class="form-signin">
    <h1 class="h3 mb-3 col-sm-6 font-weight-normal text-center">Please sign in</h1>
    <div class="form-group row mb-3">
    <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
      </div>
    </div>
  <div class="form-group row mb-3">
    <label for="inputPassword" class="col-sm-1 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password">
    </div>
  </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-dark">Sign in</button>
    </div>
</form>

<!--including basic Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
