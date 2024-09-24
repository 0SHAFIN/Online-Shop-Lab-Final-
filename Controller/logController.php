<?php
session_start();
require_once '../Model/dbquery.php';

if (isset($_POST['login'])) {
    $sId = $_POST['sId'];
    $sPass = $_POST['sPass'];
    if(empty($sId))
    {
        $_SESSION['sIdErr'] = "Seller Id is required";
    }
    if(empty($sPass))
    {
        $_SESSION['sPassErr'] = "Password is required";
    }
    if(empty($sId) || empty($sPass))
    {
        header('location:../View/sLog.php');
    }
    else{
        $result=login($sId, $sPass);
        if ($result->num_rows > 0) {
            $_SESSION['sId'] = $sId;
            $_SESSION['name']=$result->fetch_assoc()['name'];
            header('location:../View/sDashboard.php');
        } else {
            $_SESSION['msg'] = "Invalid Id or Password";
            header('location:../View/sLog.php');
        }
    }
 
} else {
    echo "Invalid Request";

}
