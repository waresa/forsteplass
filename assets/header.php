<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Førsteplass</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <h4>Første<span>Plass</span> </h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Hjem</a></li>
                            <li class="scroll-to-section"><a href="#services">Om Oss</a></li>
                            <li class="scroll-to-section"><a href="#about">Tjenester</a></li>
                            <?php if (isset($_SESSION['username'])) { ?>
                                <li class="scroll-to-section"><a href="chat.php">Chat Bot</a></li>
                            <?php } ?>
                            <!-- <li class="scroll-to-section"><a href="#blog">Blog</a></li>  -->
                            <li class="scroll-to-section"><a href="#contact">Book Møte</a></li>
                            <?php if (isset($_SESSION['username'])) { ?>
                                <li class="scroll-to-section">
                                    <div class="main-red-button"><a href="assets/logout.inc.php">Logg Ut</a></div>
                                </li>
                            <?php } ?>
                            <?php if (!isset($_SESSION['username'])) { ?>
                                <li class="scroll-to-section">
                                    <div class="main-red-button"><a href="sign-in.php">Logg Inn</a></div>
                                </li>
                            <?php } ?>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Meny</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->