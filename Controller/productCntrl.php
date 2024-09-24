<?php
require_once '../Model/dbquery.php';
$result=getAllProduct();
 if(isset($_POST['dcApply'])){
    $dcField=(int)$_POST['discount'];
    $pId=$_POST['id'];
    var_dump($dcField);
    if(addDiscount($pId, $dcField)){
        header('location:../View/sDashboard.php');
    }
    else{
        echo "Failed";
    }
 }
?>