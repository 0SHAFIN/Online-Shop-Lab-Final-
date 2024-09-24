<?php
    function con(){
        $servername = "localhost";
        $dbname = "final";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        return $conn;
    }
?>