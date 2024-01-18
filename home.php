<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email =  $_POST['email'];
    $password =$_POST['password'];

        $sql = "INSERT INTO `crud` (name, email, password) VALUES ('$name','$email','$password')";
        $result= mysqli_query($conn, $sql);

        if ($result) {
            header('location:display.php');
        } else {
            die(mysqli_error($conn));
        }
    }
?>

<!doctype html>
<html lang="ar" dir="ltr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name:-</label>
                <input type="text" class="form-control" name="Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:-</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password:-</label>
                <input type="text" class="form-control" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
