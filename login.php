<html>

<head>
    <title>Login</title>
</head>

<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>
                    <label>
                        Enter your email:
                    </label>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Enter your password:
                    </label>
                    <input type="password" name="password">
                </td>
            </tr>
        </table>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>

<?php
include 'config.php';
session_start();

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, ($_POST['email']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_query($conn, "SELECT * FROM `register` WHERE email= '$email' AND password='$password'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['users_id'] = $row['id'];
        header('location:display.php');
    } else {
        $me = 'email and password incorrect';
        echo "<script type='text/javascript'>alert('$me');</script>";
    }
}
?>
