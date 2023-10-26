<?php
include "connect_db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  function my_password_hash($password)
  {
    $hash = password_hash($password, PASSWORD_BCRYPT);
    return $hash;
  }
  //data check and validation
  function get_data()
  {
    if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["login"])) {
      echo "Invalid login" . "<br>";
      return false;
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format" . "<br>";
      return false;
    } elseif ($_POST["password"] !== $_POST["password_confirmation"]) {
      echo "Password and password confirmation do not match" . "<br>";
      return false;
    }
    //if the check ok, save user data from the form
    return array(
      "username" => $_POST['login'],
      "email" => $_POST['email'],
      "password" => my_password_hash($_POST['password'])
    );
  }

  $pdo = connect_db("127.0.0.1", "mm", "mm", "3306", "my_shop");

  $data = get_data();

   //CHECK IF THE USER email ALREADY EXISTS IN A DB
  if ($data !== false) {
    $ma_requete = "SELECT email FROM users WHERE email LIKE '" . $data['email'] . "' AND password LIKE '" . $data['password'] . "'";
   $mon_pdo_statement = $pdo->query($ma_requete);
    //var_dump($mon_pdo_statement);
    $result = $mon_pdo_statement->fetchAll(PDO::FETCH_ASSOC);
    // var_dump("A ETE TROUVER => ",  $result);
    /*$sth = $pdo->prepare($ma_requete);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
    var_dump("RESULT => ",  $result);
    return;*/
    if (isset($result) && !empty($result)) {
      echo "User with such email already exists." . "<br>";
    } else {
 //     var_dump("DATA => ", $data);
    //If the user doesn't exist, INSERT INTO users to save user data
    $statement = $pdo->prepare("INSERT INTO users (username, password, email, admin) VALUES (:username, :password, :email, 0)");
    $statement->bindParam(":username", $data['username']);
    $statement->bindParam(":password", $data['password']);
    $statement->bindParam(":email", $data['email']);
    //var_dump($statement);
    $result = $statement->execute();
    echo "User " . $data['username'] . " created" . "<br>";
  }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="my_shop_style.css">
  <title>Create your account</title>
</head>

<body>
  <form class="form-signup" action="signup.php" method="post">
    <h1 class="h3 mb-3 col-sm-6 font-weight-normal text-center">Create your account</h1>
    <div class="form-group row mb-3">
      <label for="login" class="col-sm-1 col-form-label">Login</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="login" minlength="5" maxlength="20" placeholder="Enter your login">
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="email" class="col-sm-1 col-form-label">Email</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="password" class="col-sm-1 col-form-label">Password</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" name="password" minlength="5" maxlength="20" placeholder="Enter your password" required>
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="password_confirmation" class="col-sm-1 col-form-label">Password Confirmation</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" name="password_confirmation" minlength="5" maxlength="20" placeholder="Confirm your password" required>
      </div>
    </div>

    <div class="col-sm-6">
      <button type="submit" class="btn btn-dark">Register</button>
    </div>
  </form>

  <!--including basic Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>