<?php

    $dbhost = "localhost";
    $dbname = "demo";
    $dbuser = "root";
    $dbpass = "";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }else{
        
    }

?>
