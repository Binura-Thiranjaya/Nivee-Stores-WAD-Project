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
<body>
    <p class="heading">Admin Portal</p>
    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'viewStock')">View All Stock</button>
            <button class="tablinks" onclick="openCity(event, 'addStock')">Add Stock</button>
            <button class="tablinks" onclick="openCity(event, 'publishedStock')">View Published Stock</button>
            <button class="tablinks" onclick="openCity(event, 'unpublishedStock')">View Unpublished Stock</button>
            <button class="tablinks" onclick="openCity(event, 'editStock')">Edit Stock</button>
            <button class="tablinks" onclick="openCity(event, 'viewAdmin')">View Admin</button>
        </div>

        <div id="viewStock" class="tabcontent">
            <h3>VIEW ALL STOCK</h3>
            <div>           
            <?php
                require 'View-Stock.php';
                ?>
            </div>
        </div>

        <div id="addStock" class="tabcontent">
            <h3>ADD STOCK</h3>
            <!--Add Stock with Image-->
            <div>
                <form action="Add-Stock.php" method="post" enctype="multipart/form-data">
                    <label for="name" class="addStock-label">Barcode</label>
                    <input type="text" class="addStock-input" id="barcode" name="barcode" placeholder="Barcode of the product..">

                    <label for="name" class="addStock-label">Name</label>
                    <input type="text" class="addStock-input" id="name" name="name" placeholder="Name of the product..">

                    <label for="price" class="addStock-label">Price</label>
                    <input type="number" class="addStock-input" id="price" name="price" placeholder="Price of the product..">

                    <label for="quantity" class="addStock-label">Quantity</label>
                    <input type="number" class="addStock-input" id="quantity" name="quantity" placeholder="Quantity of the product..">

                    <label for="description" class="addStock-label">Description</label>
                    <input type="text" class="addStock-input" id="description" name="description" placeholder="Write something..">

                    <label for="category" class="addStock-label">Category</label>
                    <select id="category" name="category" class="addStock-input">
                        <option value="Food" >Food</option>
                        <option value="Drink">Drink</option>
                        <option value="Snack">Snack</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="image" class="addStock-label">Image</label>
                    <input type="file" id="image" class="addStock-input" name="image" placeholder="Image of the product..">

                    <label for="status" class="addStock-label">Status</label>
                    <select id="status" name="status" class="addStock-input">
                        <option value="Published">Published</option>
                        <option value="Unpublished">Unpublished</option>
                    </select>

                    <input type="submit" value="Submit" class="addButton" name="addStock">
                    <button type="reset" style="background-color: red;" class="addButton" onclick="clearAll_AddStock()">Cancel</button>

                </form>
            </div>
        </div>

        <div id="publishedStock" class="tabcontent">
            <h3>VIEW PUBLISHED STOCK</h3>
            <?php
                require 'View-Published-Stock.php';
                ?>
        </div>
        <div id="unpublishedStock" class="tabcontent">
            <h3>VIEW UNPUBLISHED STOCK</h3>
            <?php
                require 'View-UnPublished-Stock.php';
                ?>        </div>

        <div id="editStock" class="tabcontent">
            <h3>EDIT STOCK</h3>


        </div>

        <div id="viewAdmin" class="tabcontent">
            <h3>VIEW ADMIN</h3>
            <?php
                require 'View-Profile.php';
                ?> 
        </div>

    </div>
</body>
</html>
