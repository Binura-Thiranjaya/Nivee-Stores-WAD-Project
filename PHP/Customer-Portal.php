<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer-Portal</title>
</head>
<style>
    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: sandybrown;
        color: white;
        text-align: center;
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

    li a:hover {
        background-color: #111;
    }
</style>
<?php
session_start();
$con = include 'Connection.php';
$Stock_ID = $_GET['ID'];
$User_ID = $_SESSION['customer_id'];
$sql = "INSERT INTO `tmp_cart`(`Stock_ID`, `User_ID`) VALUES ('$Stock_ID','$User_ID')";
$result = mysqli_query($con, $sql);
if ($result) {
    echo "<script type='text/javascript'>window.location.href = 'Customer-Portal.php';</script>";
} else {
    echo "<script type='text/javascript'>window.location.href = 'Customer-Portal.php';</script>";
}

?>
<script>
    function logout()
    {
        sessionStorage.clear();
        window.location.href = "../HTML/Login.html";
    }
</script>

<body>
    <!-- Navbar -->
    <ul>
        <li><a class="active"> <?php session_start(); echo $_SESSION['customer_email'];?></a></li>
        <li><a href="Customer-Portal.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a onclick="logout()">LogOut</a></li>
    </ul>
    <?php
    session_start();

    require 'View-Products.php';
    ?>
</body>
</html>