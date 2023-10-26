<?php
include "connect_db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 function get_data(){
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $_POST['email'])) {
      echo "Invalid email format" . "<br>";
      return false;
    } elseif (!preg_match_all('$\S*(?=\S{5,})\S*$', $_POST['password'])) {
      echo "The password does not meet the requirements!" . "<br>";
      return false;
  } else {
  return array(
    "email" => $_POST['email'],
    "password" => $_POST['password']
  );
}
}
  $pdo = connect_db("127.0.0.1", "mm", "mm", "3306", "my_shop");

  $data = get_data();
  /*convert entered password to a hash
  $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);*/
/*function my_password_hash($password)
  {
    $hash = password_hash($data['password'], PASSWORD_BCRYPT);
    return $hash;
  }*/
  //var_dump($data);

  //check that entered password matches a DB entry for a corresponding email

  if ($data !== false) {
    $ma_requete = "SELECT password FROM users WHERE email LIKE '" . $data['email'] . "'";
  //$ma_requete = "SELECT password FROM users WHERE email LIKE '" . $data['email'] . "' AND password LIKE '" . $data['password'] . "'";
    $mon_pdo_statement = $pdo->query($ma_requete);
    //var_dump("The query is => ",  $mon_pdo_statement);
    $result = $mon_pdo_statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump("The recorded hash is => ",  $result);
    var_dump("The password entered by user is => ", $data['password']);
    echo "Trying to extract =>" . $hash = $result['password'];// try to extract the needed part
    if (password_verify($data['password'], $result)){
      //now need to redirect to index.php if admin =0 and to admin.php if admin = 1
      echo "Hoooray, password is valid!";
      header("Location: index.php");//check the syntax: this or ./index.php?
    } else {
      echo "Please, check your password";
    }
  }
}

      //check if admin or not
      $admin_requete = "SELECT admin FROM users WHERE email LIKE '" . $data['email'] . "'";
      $mon_pdo_statement = $pdo->query($admin_requete);
      $admin_result = $mon_pdo_statement->fetchAll(PDO::FETCH_ASSOC);
      var_dump($admin_result);
      if ($admin_result = 0) {
        header("Location: index.php");//check the syntax: this or ./index.php?
      } else {
        header("Location: admin.php");//check the syntax: this or ./admin.php?
      }
?>

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
<form class="form-signin" method="post" action="signin.php">
    <h1 class="h3 mb-3 col-sm-6 font-weight-normal text-center">Please sign in</h1>
    <div class="form-group row mb-3">
    <label for="email" class="col-sm-1 col-form-label">Email</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
      </div>
    </div>
  <div class="form-group row mb-3">
    <label for="password" class="col-sm-1 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
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
