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
    <title>Search</title>
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <h1>Search results<h1>
        <?php
        if (isset($_GET['query']) && !empty($_GET['query'])) {
            $search_query = $_GET['query'];
            try {
                $pdo = connect_db("127.0.0.1", "mm", "mm", "3306", "my_shop");
      
                $ma_requete = $pdo->prepare("SELECT products.name as product_name, products.price as product_price, categories.name as categories_name FROM products as products left join categories as categories on products.category_id = categories.id where products.name like :search_query or categories.name like :search_query");
                $ma_requete->execute(['search_query' => '%' .$search_query]);              
                $results = $ma_requete->fetchAll();
    
                if (count($results) > 0) {
                foreach ($results as $result) {
                    echo "Product Name:" .$result['product_name']. PHP_EOL;
                    echo "Price:" .$result['product_price']. PHP_EOL;
                    echo "Category name:" .$result['product_categories']. PHP_EOL;
                    }
                } else {
                    echo "<p>No results</p>";
                }
             } catch (PDOException $e) {
                 die("Error: " . $e->getMessage());
        }
    } else {
        echo "<p>No results</p>";
    }            
        ?>
        <a href="index.php">Back to search</a>
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