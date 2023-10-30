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
    <title>Melinda & Maryna Shop</title>
</head>

<body>
  <?php
  session_start();
  ?>
<?php
include("navbar.php");
?>
<!-- main flexbox-->
<div class="firstRow">
  <div class="container-fluid">
    <!--row1-->
    <div class="row justify-content-between">
          <!-- 1er carré avec les filtres -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3"><article class="contenu1">
    <figure class="containerFilterBy">
                <p class="para">FILTER BY</p1>
                <div class="containerMenu">
            <p class="Menu">Collection</p>
            <svg xmlns="./images/list.svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
        
        <!--<div class="containerMenu">
            <p class="Menu">Catégories</p>
            <svg xmlns="./images/list.svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>        </div>-->
            <label for="categories">Categories</label>
            <select name="categories">
            <!-- c'est par ici qu'on ajoute ce qu'on doit afficher?-->
            <?php
      $pdo = connect_db("127.0.0.1", "mm", "mm", "3306", "my_shop");
      //read the data from categories
     $ma_requete = "SELECT * FROM categories";
     $mon_pdo_statement = $pdo->query($ma_requete);
     $result = $mon_pdo_statement->fetchAll();
      //var_dump($result);
      //foreach loop
      foreach ($result as $category) {
        echo '<option>'. $category['name']. '</option>';
      }
      ?>
    </select>

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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
              <img class="product-image img-fluid" src="./images/basilic_pot.jpg" alt="Potted basil plant">
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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
            <img class="product-image img-fluid" src="./images/blooming_cactus.jpg" alt="Potted cactus plant">
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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
            <img class="product-image img-fluid" src="./images/bonsai_tree.jpg" alt="Potted Bonsaï plant">
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
</div>
<!-- row2 -->
<div class="secondRow">
<div class="row justify-content-between">
              <!--carré 1 -->
<div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
              <img class="product-image img-fluid" src="./images/daisy_pot.jpg" alt="Potted Daisy plant">
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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
              <img class="product-image img-fluid" src="./images/lemon_tree.jpg" alt="Potted lemon tree plant">
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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
            <img class="product-image img-fluid" src="./images/plant1_pot.jpg" alt="Potted Haworthia plant">
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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
            <img class="product-image img-fluid" src="./images/plant2_pot.jpg" alt="Purple tute syngonium pixie, interior plant">
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
</div>
        
        <!-- row3 -->
<div class="thirdRow">       
<div class="row justify-content-between">
              <!--carré 1 -->
<div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
              <img class="product-image img-fluid" src="./images/rose.jpg" alt="Potted red rose plant">
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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xl-3">
              <img class="product-image img-fluid" src="./images/tomato_veggie.jpg" alt="Potted tomato plant">
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
  </div>
  
<footer>
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
  
</footer>

      <!--including basic Bootstrap scripts -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>