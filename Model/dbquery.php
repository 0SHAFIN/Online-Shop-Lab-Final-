<?php
require_once 'dbcon.php';
 function login($sId, $sPass){
    $conn = dbconnection();
    $sql="select name from seller where id='$sId' and pass='$sPass'";
    $result=$conn->query($sql);
    return $result;
 }
 function getAllProduct(){
    $conn = dbconnection();
    $sql="select * from product";
    $result=$conn->query($sql);
    return $result;
 }
 function addDiscount($pId, $dcField){

    $conn = dbconnection();
    $sql="update product set discount='$dcField' where id='$pId'";
    $result=$conn->query($sql);
    return $result;
 }
?>