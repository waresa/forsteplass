<?php

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

print_r($_POST);

if (isset($_POST["submit"])) {

    // Grabbing the data
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    echo $email;

    // Instantiate SignupContr class
    include "classes/dbh.php";
    include "classes/login.classes.php";
    include "classes/login-contr.classes.php";
    $login = new LoginContr($email, $pwd);

    // Running error handlers and user signup
    $login->loginUser();

    // Going to back to front page
    header("location: ../index.php?error=none");
}
