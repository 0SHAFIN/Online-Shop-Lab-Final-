<?php 
session_start();
require_once '../controller/productCntrl.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        margin-top: 10px;
    }
    th{
        background-color: #333;
        color: white;
    }
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
  
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
  
li a:hover:not(.active) {
    background-color: #111;
}
  
.active {
    background-color: #156ebc;
}
ul li:last-child {
    float: right;
    margin-right: 10px;
    color:white;
    padding:10px;
}

.column {
    float: left;
    width: 25%;
    padding: 10px 10px;
}
    #dcField{
        border: none;
    }
</style>
<body>
<div class="nav">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li ><?php echo $_SESSION['name']==""?"Login":$_SESSION['name']?></li>
        </ul>
    </div>  

    <div>
        <table>
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Price</th>
                <th>Discount</th>
            </tr>
            <?php
            foreach($result as $product):?>
            <tr>
                <form action="../controller/productCntrl.php" method="post">
                <td><?php echo $product['name'];?></td>
                <td><input type="hidden" name="id" value="<?php echo $product['id'];?>"><?php echo $product['id'];?></td>
                <td><?php echo $product['quantity'];?></td>
                <td><?php echo $product['catagory'];?></td>
                <td><input type="hidden" name="price" value="<?php echo $product['price'];?>"><?php echo $product['price'];?></td>  
                <td><input id="dcField" name="discount" type="text" placeholder="<?php echo $product['discount'];?>"><input type="submit" value="apply" name="dcApply"></td>
            </form>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>