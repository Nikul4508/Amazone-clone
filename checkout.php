<?php
include 'config.php';
session_start();
$user_id = $_SESSION['users_id'];
if (!isset($user_id)) {
  header('location:login.php');
};
?>

<!doctype html>
<html lang="ar" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS -->
  <link rel="icon" href="fav/amz.ico" type="image/x-icon" title="online shopping site in india:shop<br>
                                                                    online for mobiles,books,watches...<br>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
  <link rel="stylesheet" href="css/checkout.css">
  <link rel="stylesheet" href="css/nav.css">
  <title>Checkout</title>
</head>

<body>


  <nav style="height: 55px;" class="navbar sticky-top navbar-expand-lg bg-dark-subtle">

    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">
        <img src="images/amz.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        MYZONE
      </a>

    </div>
    <div>
      <b>Checkout</b>
    </div>

    </div>
  </nav>
  <table class="table container-fluid">
    <thead>
      <tr>
        <th scope="col">1 Delivery Address</th>

        <th scope="col"><a href="ads.php" class="link-secondary text-decoration-none">+ Add Address</a></th>
      </tr>
    </thead>
  </table>
  <table class="table container-fluid">
    <thead>
      <tr>
        <th scope="col">2 Select Payment Method</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
  <form>

    <div class="col-sm-10">
      <div class="form-check" dir="ltr">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Credit card or debit card
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Cash on delivery

      </div>
    </div>
    <button type="submit" class="btn btn-warning">Place oreder</button>
  </form>
  </div>
  </div>
  </div>

  </div>
  </div>
</body>

</html>