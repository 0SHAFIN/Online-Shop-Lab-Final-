<?php
 function  dbconnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Final";
    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
 }
?>