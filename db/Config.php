<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "hotel";

    $con = new mysqli($servername,$username,$password,$dbname);

    if(!$con){
        die("Could not connect".$con->connect_error);
    }
?>