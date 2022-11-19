<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/Admin-Portal.css">
    <script src="../JS/Admin-Portal.js"></script>
    <title>Admin-Portal</title>
</head>
<?php
    session_start();
    
    //echo $_SESSION['admin_id'];
    //echo $_SESSION['admin_email'];
?>

<body>
    <p class="heading">Admin Portal</p>
    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'viewStock')">View All Stock</button>
            <button class="tablinks" onclick="openCity(event, 'addStock')">Add Stock</button>
            <button class="tablinks" onclick="openCity(event, 'publishedStock')">View Published Stock</button>
            <button class="tablinks" onclick="openCity(event, 'unpublishedStock')">View Unpublished Stock</button>
            <button class="tablinks" onclick="openCity(event, 'viewCustomer')">View Customer</button>
            <button class="tablinks" onclick="openCity(event, 'viewAdmin')">View Admin</button>
        </div>

        <div id="viewStock" class="tabcontent">
            <h3>VIEW ALL STOCK</h3>
           
            <!--CARD-->
        </div>

        <div id="addStock" class="tabcontent">
            <h3>ADD STOCK</h3>
            <!--Add Stock with Image-->
            <div>
                <form action="Add-Stock.php" method="post" enctype="multipart/form-data">
                    <label for="name" class="addStock-label">Barcode</label>
                    <input type="text"  id="barcode" name="barcode" placeholder="Barcode of the product..">

                    <label for="name" class="addStock-label">Name</label>
                    <input type="text"  id="name" name="name" placeholder="Name of the product..">

                    <label for="price" class="addStock-label">Price</label>
                    <input type="number" id="price" name="price" placeholder="Price of the product..">

                    <label for="quantity" class="addStock-label">Quantity</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Quantity of the product..">

                    <label for="description" class="addStock-label">Description</label>
                    <input type="text" id="description" name="description" placeholder="Write something..">

                    <label for="image" class="addStock-label">Image</label>
                    <input type="file" id="image" name="image" placeholder="Image of the product..">

                    <input type="submit" value="Submit" class="addButton" name="addStock">
                </form>
            </div>
        </div>

        <div id="publishedStock" class="tabcontent">
            <h3>VIEW PUBLISHED STOCK</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
        <div id="unpublishedStock" class="tabcontent">
            <h3>VIEW UNPUBLISHED STOCK</h3>
            <p>London is the capital city of England.</p>
        </div>

        <div id="viewCustomer" class="tabcontent">
            <h3>VIEW CUSTOMER</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="viewAdmin" class="tabcontent">
            <h3>VIEW ADMIN</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
    </div>
</body>
</html>
