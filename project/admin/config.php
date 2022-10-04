<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "php_k41";

    $conn = mysqli_connect($host,$username,$password);
    if(isset($conn)){
        mysqli_select_db($conn,$db_name);
    }
    else {
        echo "Could not connect to database";
    }