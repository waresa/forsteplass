<?php

session_start();

$username = $_SESSION["username"];

include 'assets/classes/logs.php';

if (isset($_SESSION["username"])) {
    header("location: index.php");
}

$logs = new Logs();

$logs->clearChat($username);


header("location: chat.php?chat=cleared");
