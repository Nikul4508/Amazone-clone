<?php
include 'config.php';
session_start();
unset($_SESSION['users_id']);
session_destroy();
header('location:login.php');
?>