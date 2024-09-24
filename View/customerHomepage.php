<?php 

    require_once '../Controller/customerHomepageController.php';
    $result = fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="customerHomepageCss.css">
    <title>Product</title>
</head>
<body>

    
    <!-- <div class="nav">
        <div class="shop-name">
            Online Shop
        </div>
        <div class="navlink">
            <nav>
                <a href="#">Home</a>
                <a href="#">Order</a>
                <a href="#">Cart</a>
                <a href="#">Login</a>
            </nav>
        </div>
    </div> -->
    
    <div class="nav">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="sLog.php">Login</a></li>
        </ul>
    </div>  
      
    <div class="h1">
        <h1>Customer Homepage</h1>
    </div>
    
    <div class="row">
        <?php foreach($result as $product): ?>
            <div class="column">
                <div class="card">
                    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                    <p>ID: <?php echo htmlspecialchars($product['id']); ?></p>
                    <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
                    <p>Quantity: <?php echo htmlspecialchars($product['quantity']); ?></p>
                    <p>Discount: <?php echo htmlspecialchars($product['discount']); ?>%</p>
                    <p>Category: <?php echo htmlspecialchars($product['catagory']); ?></p>
                    <p>New price: 
                        <?php
                            if ( $product['discount'] != 0 ) {
                                $newPrice = $product['price'] - ($product['price'] * $product['discount'] / 100);
                                echo $newPrice;
                            } else {
                                echo $product['price'];
                            }
                        ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
            
</body>
</html>