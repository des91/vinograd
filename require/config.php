<?php
    $servername = "mysql.drevses.myjino.ru";
    $username = "046281107_dev";
    $password = "Poison70";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'drevses_vinograd');

    // Check connection
    if (!$conn) 
    {
        die("Не удалось подключиться к базе данных: " . mysqli_connect_error());
    }
?>