<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Admin-Portal.css">
    <title>EdiT-Stock</title>
</head>
<body>
    <div>
        <form action="Edit-Stock.php" method="post" enctype="multipart/form-data">
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

            <input type="submit" value="Submit" name="submit" class="addButton">
        </form>
    </div>
    
</body>
</html>