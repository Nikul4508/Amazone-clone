<?php
include 'config.php';
session_start();
$user_id = $_SESSION['users_id'];
if (!isset($user_id)) {
  header('location:login.php');
};
?>



<!doctype html>
<html lang="ar" dir="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS -->
  <link rel="icon" href="fav/amz.ico" type="image/x-icon" title="online shopping site in india:shop<br>
                                                                    online for mobiles,books,watches...<br>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
  <link rel="stylesheet" href="css/watche.css">
  <link rel="stylesheet" href="css/nav.css">
  <title>Samusung-Smartphones</title>
</head>

<body>


  <nav style="height: 55px;" class="navbar sticky-top navbar-expand-lg bg-dark-subtle">

    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">
        <img src="images/amz.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        MYZONE
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " href="home.php">Home</a>
          </li>



        </ul>

      </div>

    </div>
    <div>
      <a href="atc.php" style="color: black;">
        <i class="bi bi-cart2"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
        </svg>
      </a>
    </div>
    <div>
      <a href="profile.php" style="color: black;">
        <i class="bi bi-person-circle"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
      </a>
    </div>


    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        All
      </a>

      <ul class="dropdown-menu text-end">
        <li><a class="dropdown-item" href="">Mobiles</a></li>
        <li><a class="dropdown-item" href="watche.php">Smartwatches</a></li>
        <li><a class="dropdown-item" href="#">iphone</a></li>
        <li><a class="dropdown-item" href="#">Laptop</a></li>
        <li><a class="dropdown-item" href="homet.php">Air Conditioner</a></li>
        <li><a class="dropdown-item" href="homet.php">Refrigreter</a></li>

      </ul>
    </div>
    <form class="d-flex" role="search" method="GET" action="searchps.php">
      <input class="form-control me-2" name='search' type="search" placeholder="Search" aria-label="Search">
      <button class=" btn btn-dark" type="submit">Search</button>
    </form>


    </div>
  </nav>


  <h3>Results</h3>
  <?php

  // Display products
  $product_query = mysqli_query($conn, "SELECT * FROM `samsung`");
  if (mysqli_num_rows($product_query) > 0) {
    while ($fetch_product = mysqli_fetch_assoc($product_query)) {

  ?>

      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <form method="POST" action="cart.php">
              <div class="card mb-3 bg-secondary p-2 text-dark bg-opacity-10" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/<?php echo $fetch_product['image']; ?>" class="img-fluid rounded-start" alt="..."><br>
                    <br><a href="checkout.php"><button type="button" class="btn btn-warning">BUY</button></a>
                    <button type="submit" name="addcart" class="btn btn-warning">Add To Cart</button>


                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-end"><?php echo $fetch_product['name']; ?></h5>
                      <p class="card-text "><button type="submit" value="deal" name="dealday" class="btn btn-danger">Deal of Day</button><br><b><?php echo $fetch_product['price']; ?></b> <small class="text-muted text-decoration-line-through"> M.R.P:₹6,999</small> (87% off)</p>
                      <input class="text-center" type="number" min="1" name="product_quantity" value="1">



                      <input class="text-center" type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                      <input class="text-center" type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                      <input class="text-center" type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">


                      <p class="card-text"><small class="text-muted">Get it by Sunday, 16 JulyFREE Delivery by Amazon</small></p>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <form method="POST" action="cart.php">
          <div class="card mb-3 bg-secondary p-2 text-dark bg-opacity-10" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/<?php echo $fetch_product['image']; ?>" class="img-fluid rounded-start" alt="..."><br>
                <br><a href="checkout.php"><button type="button" class="btn btn-warning">BUY</button></a>
                <button type="submit" name="addcart" class="btn btn-warning">Add To Cart</button>

              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-end"><?php echo $fetch_product['name']; ?></h5>
                  <p class="card-text "><button type="button" class="btn btn-danger">Deal of Day</button><br><b><?php echo $fetch_product['price']; ?></b> <small class="text-muted text-decoration-line-through"> M.R.P:₹6,999</small> (87% off)</p>
                  <input class="text-center" type="number" min="1" name="product_quantity" value="1">
                  <input class="text-center" type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                  <input class="text-center" type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                  <input class="text-center" type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">

                  <p class="card-text"><small class="text-muted">Get it by Sunday, 16 JulyFREE Delivery by Amazon</small></p>
                </div>
              </div>
        </form>
      </div>
      </div>
      </div>




      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <form method="POST" action="cart.php">
          <div class="card mb-3 bg-secondary p-2 text-dark bg-opacity-10" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/<?php echo $fetch_product['image']; ?>" class="img-fluid rounded-start" alt="..."><br>
                <br><a href="checkout.php"><button type="button" class="btn btn-warning">BUY</button></a>
                <button type="submit" name="addcart" class="btn btn-warning">Add To Cart</button>

              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-end"><?php echo $fetch_product['name']; ?></h5>
                  <p class="card-text "><button type="button" class="btn btn-danger">Deal of Day</button><br><b><?php echo $fetch_product['price']; ?></b> <small class="text-muted text-decoration-line-through"> M.R.P:₹6,999</small> (87% off)</p>
                  <input class="text-center" type="number" min="1" name="product_quantity" value="1">
                  <input class="text-center" type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                  <input class="text-center" type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                  <input class="text-center" type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">

                  <p class="card-text"><small class="text-muted">Get it by Sunday, 16 JulyFREE Delivery by Amazon</small></p>
                </div>
              </div>
        </form>
      </div>
      </div>
      </div>
      </div>

      <!-- Force next columns to break to new line at md breakpoint and up -->

      <div>
      </div>




  <?php
    };
  };
  ?>









  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>
<hr>


<footer class="text-center text-lg-start text-muted mt-3" style="background-color:whitesmoke;">

  <section class="">
    <div class="container text-center text-md-start pt-4 pb-4">

      <div class="row mt-3">

        <div class="col-12 col-lg-3 col-sm-12 mb-2">

          <a href="" target="_blank" class="">
            <img src="images\amz.jpg" height="35" />
          </a>
          <p class="mt-2 text-dark">
            © 2023 Copyright: Myzone.com
          </p>
        </div>

        <div class="col-6 col-sm-4 col-lg-2">

          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Store
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" style="text-decoration: none;" href="#">About us</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Find store</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Categories</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Blogs</a></li>
          </ul>
        </div>

        <div class="col-6 col-sm-4 col-lg-2">

          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Information
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" style="text-decoration: none;" href="#">Help center</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Money refund</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Shipping info</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Refunds</a></li>
          </ul>
        </div>

        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Support
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" style="text-decoration: none;" href="#">Help center</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Documents</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">Account restore</a></li>
            <li><a class="text-muted" style="text-decoration: none;" href="#">My orders</a></li>
          </ul>
        </div>

        <div class="col-12 col-sm-12 col-lg-3">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">Newsletter</h6>
          <p class="text-muted">Stay in touch with latest updates about our products and offers</p>
          <div class="input-group mb-3">
            <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
            <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
              Join
            </button>
          </div>
        </div>

      </div>

    </div>
  </section>



</footer>