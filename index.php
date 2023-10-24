<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="my_shop_style.css">
    <title>Melinda & Maryna Shop</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MM Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#expandme" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="expandme">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
      <a class="btn btn-dark" href="./signup.php" role="button">Create your account</a>
      <a class="btn btn-dark" href="./signin.php" role="button">Sign In</a>
    </div>
  </div>
  <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form>
</nav>

<!-- main flexbox-->
  <div class="container-fluid">
    <!--row1-->
    <div class="row justify-content-between">
          <!-- 1er carré avec les filtres -->
            <div class="col-md-5 col-xl-3 bg-info"><article class="contenu1">
    <figure class="containerFilterBy">
        <blockquote lang="en">
        <p class="para">FILTER BY</p1>
        </blockquote>  
        <div class="containerMenu">
            <p class="Menu">Collection</p>
            <svg xmlns="./images/list.svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
        
        <div class="containerMenu">
            <p class="Menu">Catégories</p>
            <svg xmlns="./images/list.svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
        <div class="containerMenu">
            <p class="Menu">BPM</p>
            <svg xmlns="./images/list.svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
        <div class="containerRange">
            <p>Prix</p>
            <input type="range" id="price" min="0" max="150" step="1" value="0">
            <article class="nbr">
                <p class="chiffre">0€</p>
                <p class="chiffre2">150€</p2>
            </article>
        </div>
    </figure>
  </div>
            <!-- les carrés avec les images -->
            <!--carré 1 -->
            <div class="col-md-5 col-xl-3">
              <img class="product-imag img-fluid" src="./images/basilic_pot.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Basilic plant</h4>
                    <span class="price">€9.99</span>
                    <p class="category">aromatic plant</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-o checked" aria-hidden="true"></span>
                </div>
              </div>
                <!--carré 2 -->
            <div class="col-md-5 col-xl-3">
            <img class="product-image img-fluid" src="./images/blooming_cactus.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Blooming cactus</h4>
                    <span class="price">€19.99</span>
                    <p class="category">succulent</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                </div>
            </div>
            <!--carré 3 -->
            <div class="col-md-5 col-xl-3 bg-info border">
            <img class="product-image img-fluid" src="./images/bonsai_tree.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Bonsai tree</h4>
                    <span class="price">€39.99</span>
                    <p class="category">bonsai</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
              </div>
           
              

            </div>
        
<!-- row2 -->
<div class="row justify-content-between">
              <!--carré 1 -->
<div class="col-md-5 col-xl-3">
              <img class="product-imag img-fluid" src="./images/daisy_pot.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Daisy</h4>
                    <span class="price">€8.99</span>
                    <p class="category">flower</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
              </div>
            <!--carré 2 -->
            <div class="col-md-5 col-xl-3">
              <img class="product-imag img-fluid" src="./images/lemon_tree.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Lemon tree</h4>
                    <span class="price">€49.99</span>
                    <p class="category">tree</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-o checked" aria-hidden="true"></span>
                </div>
              </div>
                <!--carré 3 -->
            <div class="col-md-5 col-xl-3">
            <img class="product-image img-fluid" src="./images/plant1_pot.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Plant1</h4>
                    <span class="price">€12.50</span>
                    <p class="category">succulent</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                </div>
            </div>
            <!--carré 4 -->
            <div class="col-md-5 col-xl-3 bg-info border">
            <img class="product-image img-fluid" src="./images/plant2_pot.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Plant2</h4>
                    <span class="price">€39.99</span>
                    <p class="category">interior plant</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
              </div>
        </div>

        
        <!-- row3 -->
<div class="row justify-content-between">
              <!--carré 1 -->
<div class="col-md-5 col-xl-3">
              <img class="product-imag img-fluid" src="./images/rose.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Rose</h4>
                    <span class="price">€8.99</span>
                    <p class="category">flower</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
              </div>
            <!--carré 2 -->
            <div class="col-md-5 col-xl-3">
              <img class="product-imag img-fluid" src="./images/tomato_veggie.jpg" alt="">
              <div class="product-info">  
                    <h4 class="product-name">Tomato</h4>
                    <span class="price">€15.70</span>
                    <p class="category">vegetable</p>
                    <i class=" cart fa fa-cart-arrow-down" aria-hidden="true"></i>
                </div>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-o checked" aria-hidden="true"></span>
                </div>
              </div>
        </div>


        </div>
  </div>

        <!--pagination-->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
  

      <!--including basic Bootstrap scripts -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>