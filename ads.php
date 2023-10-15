<?php
include 'config.php';
session_start();
$user_id = $_SESSION['users_id'];
if (!isset($user_id)) {
  header('location:login.php');
};

if (isset($_POST['addads'])) {
  $Fname =  $_POST['fname'];
  $Lname = $_POST['lname'];
  $Address =  $_POST['address'];
  $City =  $_POST['city'];
  $State =  $_POST['state'];
  $Zip =  $_POST['zip'];

  $select =   mysqli_query($conn, "INSERT INTO`ads`(fname,lname,address,city,state,zip) VALUES('$Fname','$Lname','$Address','$City','$State','$Zip')") or die('query failed');
  header('location:checkout.php');
}
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
  <link rel="stylesheet" href="css/checkout.css">
  <link rel="stylesheet" href="css/nav.css">
  <title>Address-Form</title>
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
      <b>Address</b>
    </div>
    </div>
  </nav>

  <form class="row g-3" method="POST">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="fname" required>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="lname">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
    </div>

    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select" name="state" required>
        <option selected>Choose</option>
        <option>GUJRAT</option>
        <option>DELHI</option>
        <option>ASSAM</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip" required>
    </div>

    <div class="col-12">
      <button type="submit" name="addads" value="addads" class="btn btn-warning">Add</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>