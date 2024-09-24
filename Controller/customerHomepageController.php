<?php 

    require_once '../Model/fetchdata.php';
    
    function fetch(){
        $result = fetchdata();
        return $result;
    }
?>