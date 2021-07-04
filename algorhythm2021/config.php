<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'u789241273_algorhythm2021');
    define('DB_PASSWORD', '2VFEJrO]');
    define('DB_NAME', 'u789241273_tcalgorhythm21');
    
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>