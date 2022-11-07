<?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "communix_employee";
    
                
    $link = mysqli_connect($hostname, $username, $password, $database);
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>