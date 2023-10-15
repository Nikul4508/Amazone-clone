<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    
    $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
    if ($searchQuery === "watche") {
        header("Location: watche.php");
        exit;
    } elseif ($searchQuery === "smartwatche") {
        header("Location: watche.php");
    } else {
        header("Location: home.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    
    $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
    if ($searchQuery === "samsung") {
        header("Location: samsung.php");
        exit;
    } elseif ($searchQuery === "samsung phone") {
        header("Location: samsung.php");
    } else {
        header("Location: home.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    
    $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
    if ($searchQuery === "macbook") {
        header("Location: macbook.php");
        exit;
    } elseif ($searchQuery === "appple laptop") {
        header("Location: macbook.php");
    } else {
        header("Location: home.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    
    $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
    if ($searchQuery === "iphone") {
        header("Location: iphone.php");
        exit;
    } elseif ($searchQuery === "appple phone") {
        header("Location: iphone.php");
    } else {
        header("Location: home.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    
    $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
    if ($searchQuery === "fridge") {
        header("Location: hp.php");
        exit;
    } elseif ($searchQuery === "ac") {
        header("Location: hp.php");
    } else {
        header("Location: home.php");
    }
}
