<?php

if (isset($_POST["submit"])) {

    // Grabbing the data
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];
    $username = $_POST["username"];

    // Instantiate SignupContr class
    include "classes/dbh.php";
    include "classes/signup.classes.php";
    include "classes/signup-contr.classes.php";

    $signup = new signupContr($pwd, $pwdRepeat, $email, $username);


    // Running error handlers and user signup
    $signup->signupUser();

    // Going to back to front page
    header("location: ../sign-in.php?error=none");
}
