<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <form method="post">
            <input type="text" placeholder="Search here" name="search">
            <button class="btn btn-primary" name="submit">Search</button>
        </form>
        <div class="container my-5">
            <table class="table">
                <?php
                include 'config.php';
                if (isset($_POST['submit'])) {
                    $search = $_POST['search'];

                    $sql = "select * from `crud` where id='$search' or name='$search' or email='$search'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            echo '<tbody>
                        <tr>
                        <td>' . $row['id'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['password'] . '</td>
                        </tr>
                        </tbody>
                        ';
                        } else {
                            echo "<h2>data not found</h2>";
                        }
                    }
                }
                ?>
            </table>

        </div>
    </div>
    
</body>
</html>


