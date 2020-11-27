<?php
    $servername = "remotemysql.com";
    $username = " OuuQyKjM5n";
    $password = "Xa5cSuc0AP";
    $dbname = "OuuQyKjM5n";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>
