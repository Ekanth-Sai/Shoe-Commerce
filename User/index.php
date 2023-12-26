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
<div class="row">
  <div class="col-md-10">
    <!-- Products -->
    <div class="row">
      <!-- Product 1 -->
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="https://cdn00.nnnow.com/web-images/large/styles/JMAJCPZVH3N/1694168794027/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-info">View More</a>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHNuZWFrZXJ8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-info">View More</a>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="https://lucasports.in/cwsd.php?Z3AuPTQ0Pg/NDQ/V1VWSkAoRUE8KTY_OTM8eScjPS1lfnE.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-info">View More</a>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="col-md-4 mb-2">
      <div class="card">
          <img src="https://www.khelmart.com/pub/media/catalog/product/cache/712b931dac1b924a11d1b7282ad89910/s/g/sg_sh_74_sim._large.jpg.mst.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-info">View More</a>
          </div>
        </div>
      </div>

      <!-- Product 5 -->
      <div class="col-md-4 mb-2">
      <div class="card">
          <img src="https://images.unsplash.com/photo-1587563871167-1ee9c731aefb?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FzdWFsJTIwc2hvZXN8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-info">View More</a>
          </div>
        </div>
      </div>

      <!-- Product 6 -->
      <div class="col-md-4 mb-2">
      <div class="card">
          <img src="https://media.istockphoto.com/id/172417586/photo/elegant-black-leather-shoes.jpg?s=612x612&w=0&k=20&c=c_tTljwbu2m0AGxwb27NxCgG0Y2Cv-C4v8q6V36RYbw=" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-info">View More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- sidenav -->
    <!-- Brands Display -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>    
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Brand</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Brand</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Brand</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Brand</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Brand</a>
      </li>  
    </ul>
    <!-- Cateories Display -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>    
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Category 1</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Category 2</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Category 3</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Category 4</a>
      </li>  
      <li class="nav-item ">
        <a href="#" class="nav-link text-light">Category 5</a>
      </li>  
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