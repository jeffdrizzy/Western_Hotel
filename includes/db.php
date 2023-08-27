<?php

    $db_name = "western_hotel";
    $username = "root";
    $password = "";
    $hostname = "localhost";

    $connection = mysqli_connect($hostname, $username, $password, $db_name);

    if (!$connection) {
        echo "kindly check database file, not working";
    }
?>
