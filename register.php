<html>

<head>Register</head>

<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <label>
                        Enter your name:
                    </label>
                    <input type="text" name="yname" id="yname">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Enter your email:
                    </label>
                    <input type="email" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Enter your password:
                    </label>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
        </table>
        <button type="submit" name="register" value="register">Register</button>
    </form>
    <a href="login.php">login here</a>
</body>

</html>
<?php

include 'config.php';

if (isset($_POST['register'])) {

    $name =  $_POST['yname'];
    $email =  $_POST['email'];
    $password = $_POST['password'];

    $select = mysqli_query($conn, "SELECT * FROM `register` WHERE email = '$email' AND password = '$password'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $me = 'Email and password incorrect';
        echo "<script type='text/javascript'>alert('$me');</script>";
    } else {
        mysqli_query($conn, "INSERT INTO `register` (yname, email, password) VALUES ('$name', '$email', '$password') ") or die('query failed');
        header('location:login.php');
    }
}

?>