<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
     <form action="../Controller/logController.php" method="post">
        <label for="sellerId">Seller Id</label>
        <input type="text" name="sId" id="sellerId">
        <?php if(isset($_SESSION['sIdErr'])){echo $_SESSION['sIdErr'];}?>
        <br>
        <label for="sellerPass">Password</label>
        <input type="password" name="sPass" id="sellerPass">
        <?php if(isset($_SESSION['sPassErr'])){echo $_SESSION['sPassErr'];}?>
        <br>
        <input type="submit" name="login" value="login"><br>
        Dont have any account?
        <a href="#">signup</a>
     </form>
     <?php
     session_unset();
     ?>
     <a href="">Continue without login</a>
</body>
</html>
