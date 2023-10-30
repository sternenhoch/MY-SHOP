  <!-- navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MM Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#expandme" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="expandme">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>

      <?php 
      /*if (isset($_SESSION['user_id'])) {
        echo '<a class="btn btn-dark" href="./logout.php" role="button">Logout</a>';
      } else {
        echo '<a class="btn btn-dark" href="./signup.php" role="button">Create your account</a>';
        echo '<a class="btn btn-dark" href="./signin.php" role="button">Sign In</a>';
      }*/
      ?>
      <a class="btn btn-dark" href="./signup.php" role="button">Create your account</a>
      <a class="btn btn-dark" href="./signin.php" role="button">Sign In</a>
      <a class="btn btn-dark" href="./logout.php" role="button">Logout</a>

    </div>
  </div>
   <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form> -->
      <form class="d-flex" action="search.php" method="GET">
        <input type ="text" name="query" placeholder="Search">
        <input type="submit" value="Search">
      </form>
</nav>