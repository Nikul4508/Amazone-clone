<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/atc.css">
    <link rel="icon" href="fav/amz.ico" type="image/x-icon" title="online shopping site in india:shop<br>
                                                                    online for mobiles,books,watches...<br>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart-Items</title>
</head>

<body>
    <?php
    session_start();
    $ptotal = 0;
    $total = 0;
    include 'nav.php';
    include 'config.php';
    $user_id = $_SESSION['users_id'];
    if (!isset($user_id)) {
        header('location:login.php');
    };
    ?>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1 class="text-warning ">My Cart</h1>
            </div>
            <div class="col-sm">
                <a href="home.php"><button class="n btn btn-warning">Add more</button></a>
            </div>
            <div class="col-sm">
                <form action='cart.php' method='post'>
                    <div class="col-lg-5">
                        <button name='removeall' class='a btn btn-warning'>Delete All</button><br>
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <h3> Total: <?php
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {

                                    if (is_numeric($value['productprice']) && is_numeric($value['productquantity'])) {
                                        $ptotal = $value['productprice'] * $value['productquantity'];
                                        $total += $ptotal;
                                    }
                                }
                            }

                            echo number_format($total, 2, '.', ','); ?></h3>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid">
        <div class="row  justify-content-around">
            <div class="  col-sm-12 col-md-6 col-lg-9">
                <table class="   table table-bordered text-center">
                    <thead class=" text-white fs-5">
                        <th>No</th>

                        <th> Name</th>
                        <th> Price</th>
                        <th> Quantity</th>
                        <th>Total Amount</th>
                        <th>Delete</th>

                    </thead>
                    <tbody>
                        <?php

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {

                                if (is_numeric($value['productprice']) && is_numeric($value['productquantity'])) {
                                    $ptotal = $value['productprice'] * $value['productquantity'];
                                }



                                echo " 
                               <form action='cart.php' method='post'>
                                <tr>

                                <td>$key</td>
                
                                <td>$value[productname]</td>
                                <td>$value[productprice]</td>
                                <td>$value[productquantity]</td>
                                <td>$ptotal</td>
                                
                                <td><button name='remove' class='btn btn-warning'>Delete</button>
                                <input type='hidden' name='product' value='$value[productname]'></td>
                               
                                </tr>
                               <tr>
                               
                               </tr>
                                </form>
                               ";
                            }
                        }
                        ?>

                        <?php
                        if (isset($_SESSION['cart']) == null || sizeof($_SESSION['cart']) == 0) {
                            echo " 
                                <tr>

                                <td class='col-7' colspan='7'>No record found</td>
                                </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>