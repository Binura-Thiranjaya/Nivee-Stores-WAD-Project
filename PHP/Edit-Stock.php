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
        <?php
        session_start();
        if(!isset($_SESSION['admin_id'])){
            header("Location: ../HTML/Login.html");
        }
        if (isset($_GET['ID'])) {
            $id = $_GET['ID'];
            $con = require_once("Connection.php");
            $sql = "SELECT * FROM stock WHERE ID = '$id'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<form action='Edit-Stock.php' method='POST'>
            <input type='hidden' name='ID' value='" . $row['ID'] . "'>
            <label for='Name' class='addStock-label' >Name</label>
            <input type='text'class='addStock-input' name='Name' value='" . $row['NAME'] . "'>
            <label for='Price' class='addStock-label' >Price</label>
            <input type='text' name='Price' class='addStock-input' value='" . $row['PRICE'] . "'>
            <label for='Quantity' class='addStock-label' >Quantity</label>
            <input type='text' name='Quantity' class='addStock-input' value='" . $row['QUANTITY'] . "'>
            <label for='Description' class='addStock-label'>Description</label>
            <input type='text' name='Description' class='addStock-input' value='" . $row['DESCRIPTION'] . "'>
            <label for='Published' class='addStock-label'>Published</label>
            <select id='status' name='status' class='addStock-input'>
            <option value='Published'>Published</option>
            <option value='Unpublished'>Unpublished</option>
            </select>            
            <input type='submit' name='submit' value='Update' class='addButton'>
            </form>";
        }
        ?>
    </div>

</body>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
    $name = $_POST['Name'];
    $price = $_POST['Price'];
    $quantity = $_POST['Quantity'];
    $description = $_POST['Description'];
    $status = $_POST['status'];
    $con = require_once("Connection.php");
    $sql = "UPDATE Stock SET NAME = '$name', PRICE = '$price', QUANTITY = '$quantity', DESCRIPTION = '$description', STATUS= '$status' WHERE ID = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Stock Updated Successfully')</script>";
        header("Location: Admin-Portal.php");
    } else {
        echo "<script>alert('Stock Not Updated')</script>";
        header("Location: Admin-Portal.php");
    }
}
?>

</html>