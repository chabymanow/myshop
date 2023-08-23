<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is my shop!">
    <link rel="preload" fetchpriority="high" as="image" href="images/header.webp" type="image/webp">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar w-100 navbar-expand-sm navbar-dark bg-dark mb-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDiv" aria-controls="navbarDiv" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarDiv">
                <a class="navbar-brand px-5" href="index.php">My shop</a>
                <ul class="navbar-nav w-100 mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <?php if (isset($_SESSION["username"])){
                        echo "<li class='nav-item listItem dropdown'>";
                            echo "<a class='nav-link dropdown-toggle' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Hello " . $_SESSION["username"] . "!</a>";
                            echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
                            echo "<a class='dropdown-item' href='user.php'>Profile</a>";
                            echo "<a class='dropdown-item' href='usercart.php'>Cart</a>";
                            echo "</div>";
                            echo "</li>";
                            echo "<li class='nav-item'>";
                            echo "<a class='nav-link' href='backend/logout.php'>Logout</a>";
                        }else{
                            echo "<li class='nav-item listItem'>";
                            echo "<a class='nav-link' href='login.php'>Login</a>";
                            echo "</li>";
                            echo "<li class='nav-item'><a class='nav-link' href='register.php'>Register</a></li>";
                        }
                    ?>
                </ul>
            </div>
            
        </nav>
    </header>
    <div class='messages' id='messages'>
                    <div class="messageText">yee</div>
                    <span class="messageClose" onclick="this.parentElement.style.display = 'none';">X</span>
                </div>
    <section id="content">
 