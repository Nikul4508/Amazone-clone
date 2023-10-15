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
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
  <link rel="icon" href="fav/amz.ico" type="image/x-icon" title="online shopping site in india:shop<br>
                                                                    online for mobiles,books,watches...<br>">

  <title>Profile</title>
</head>

<body>

  <?php
  $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
  if (mysqli_num_rows($select_user) > 0) {
    $fetch_user = mysqli_fetch_assoc($select_user);
  };
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100" style="background-color:	#FFFF99;">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem; ">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <p style="color: black;"> MY PROFILE <br><b> <?php echo $fetch_user['name']; ?></b></p>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h5 style="color:black;">Welcome To My Zone</h5>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-12 mb-3">
                      <h6>Email</h6>
                      <p><?php echo $fetch_user['email']; ?></p>
                    </div>

                  </div>
                  <h6>Log-out Here</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <a href="logout.php"><button type="button" class="btn btn-warning">logout</button></a>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



</body>

</html>