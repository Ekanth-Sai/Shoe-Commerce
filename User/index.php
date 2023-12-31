<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contents="IE=edge">
    <meta name="viewport" contents="width=device-width, initial-scale=1.0">
    <title>DBMS GLOB</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">

    <style>
      .card-img-top
      {
        width: 100%;
        height: 200px;
        object-fit: contain;
      }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <img src="https://www.freeiconspng.com/thumbs/cart-icon/basket-cart-icon-27.png" alt="" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">cart<i class="fa-solid fa-cart-shopping"></i>1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Total Price: 100/-</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

        <!-- Second Child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                  </li>
            </ul>
        </nav>

        <!-- Third Child --> 
        <div class="bg-light">
            <h3 class="text-center">
                Customer Store
            </h3>
            <p class="text-center">
                Explore the site and choose the items to buy!
            </p>
        </div>

        <!-- Fourth Child -->
        <div class="row px-1">
          <div class="col-md-10">
            <!-- Products -->
            <div class="row">
              <!-- Product 1 -->
              <!-- fetching products -->
              <?php
              $select_query="Select * from `products` order by rand() LIMIT 0, 9";
              $result_query=mysqli_query($con, $select_query);
              while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                  <img src='../Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                    <a href='#' class='btn btn-info'>View More</a>
                  </div>
                </div>
              </div>";
              }
              ?>
            </div>
          </div>

          <!-- sidenav -->
          <div class="col-md-2 bg-secondary p-0">
            <!-- Brands Display -->
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
              </li>  
              <?php
              $select_brands="Select * from `brands`";
              $result_brands=mysqli_query($con,$select_brands);
              while($row_data=mysqli_fetch_assoc($result_brands)){
                $brand_title=$row_data['brand_title'];
                $brand_id=$row_data['brand_id'];
                echo"<li class='nav-item'>
                <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
              </li>";
              }
              ?>  
            </ul>
            <!-- Categories Display -->
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
              </li>    
              <?php
              $select_categories="Select * from `categories`";
              $result_categories=mysqli_query($con,$select_categories);
              while($row_data=mysqli_fetch_assoc($result_categories)){
                $category_title=$row_data['category_title'];
                $category_id=$row_data['category_id'];
                echo"<li class='nav-item'>
                <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
              </li>";
              }
              ?>  
            </ul>
          </div>
        </div>

        <!-- last child -->
        <div class="bg-light text-center">
            <p>
                DBMS GLOB
            </p>
        </div>
    </div>
    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
