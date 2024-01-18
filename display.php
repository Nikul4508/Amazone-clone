<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button type="submit" name="submit" class="btn btn-primary my-5"><a href="home.php" class="text-light">ADD</a></button>
        <button class="btn btn-primary my-5"><a href="search.php" class="text-light">Search</a></button>
    </div>
    
    <table class="table my-5 mx-5">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `crud` ORDER BY id asc ";
            $result = mysqli_query($conn, $sql);

            $num = mysqli_num_rows($result);
            $numberpages = 7;
            $totalpages = ceil($num / $numberpages);

            for ($btn = 1; $btn <= $totalpages; $btn++) {
                echo '<button class="btn btn-primary mx-3"><a class="text-light" href="display.php?page=' . $btn . '">' . $btn . '</a></button>';
            }
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
              
            } else {
                $page = 1;
            }

            $startinglimit = ($page - 1) * $numberpages;
            $sql = "select * from `crud` ORDER BY id asc limit " . $startinglimit . ',' . $numberpages;

            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $password = $row['password'];

                    echo '
                    <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $password . '</td>
                        <td>
                        <button type="submit" name="submit" class="btn btn-primary my-5"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                        <button type="submit" name="submit" class="btn btn-primary my-5"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                        </td>
                    </tr>';
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            ?>
        </tbody>
    </table>
   
</body>

</html>