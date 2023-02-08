<?php
 $servername = "localhost";
     $database = "33";
     $username = "root";
     $password = "";

    /* $servername = "sql107.epizy.com";
     $database = "epiz_33395320_33";
     $username = "epiz_33395320";
     $password = "FNMwmAa4DA"; */
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    /*$conn->set_charsot("utf8");*/
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }