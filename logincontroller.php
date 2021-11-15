<?php

if (count($_GET) > 0) {
    $username = $_GET["username"];
    $passwd = $_GET["passwd"];

    if ($username == "lamnhungoc@gmail.com" && $passwd == "12345" && isset($username)) {
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
}
?>

