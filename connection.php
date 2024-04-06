<?php
    $server = "localhost";
    $user ="root";
    $pass ="";
    $dbname ="fusion";

    $conn = new mysqli($server, $user, $pass, $dbname);
    
    if($conn->connect_error){
        die("connection Fialed: " .$conn->connect_error);
    }else{
        echo "";
    }

?>