<?php

    require_once 'db.php';

    function fetchdata(){
        $conn = con();
        $sql = "select * from product";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

?>


