<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ref="stylesheet" href="../CSS/cart.css">
    <title>Cart</title>
</head>
<script>
    function removeItemFromCart(id) {
        alert("Item removed from cart");
    }

    function updateQuantity() {
        var quantity = document.getElementById("quantity").value;

    }
</script>
<style>
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

<body>
    <ul>
        <li><a class="active"> <?php session_start(); echo $_SESSION['customer_email']; ?></a></li>
        <li><a href="Customer-Portal.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="#about">LogOut</a></li>
    </ul>
    <div id="card">
        <?php
        session_start();
        if(!isset($_SESSION['customer_id'])){
            header("Location: ../HTML/Login.html");
        }
        $conn = require 'Connection.php';
        $sql = "SELECT cart.id,stock.NAME,stock.DESCRIPTION,stock.PRICE,stock.IMAGE,stock.BARCODE FROM tmp_cart cart JOIN Users user ON user.id = cart.User_ID JOIN Stock stock ON stock.ID = cart.Stock_ID WHERE user.id = '" . $_SESSION['customer_id'] . "';";
        $result = $conn->query($sql);
        //link css style
        echo "<link rel='stylesheet' href='../CSS/Admin-Portal.css'>";

        if ($result->num_rows > 0) {
            // output data of each rows
            while ($row = $result->fetch_assoc()) {
                //CARD
                echo "<div class='card' style='
                padding-left:0%;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 300px;
                margin: auto;
                text-align: center;
                font-family: arial;
                margin-bottom:1%;
                '
                >";
                echo "<img  src='data:image/jpeg;base64," . $row['IMAGE'] . "' alt=" . $row['Name'] . " width=100px height=100px>";
                echo "<div class='viewAll-card-body'>";
                echo "<h5 style='
                                        font-size: 20px;
                                        font-weight: bold;
                                        color: #000;
                                        margin-bottom: 10px;
                                        text-align: center;'>
                                        Name: " . $row['NAME'] . "</h5>";
                echo "<p style='   
                                        font-size:10px;
                                        font-weight: bold;
                                        color: #000;
                                        margin-bottom: 10px;
                                        text-align: center;'>
                                        Description:" . $row['DESCRIPTION'] . "</p>";
                echo "<p style='
                                        font-size: 10px;
                                        font-weight: bold;
                                        color: #000;
                                        margin-bottom: 10px;
                                        text-align: center;'>
                                        Price: " . $row['PRICE'] . "</p>";

                echo "<p style='
                                        font-size: 10px;
                                        font-weight: bold;
                                        color: #000;
                                        margin-bottom: 10px;
                                        text-align: center;'>
                                        Category: " . $row['CATEGORY'] . "</p>";
                echo "<p style='
                                        font-size: 10px;
                                        font-weight: bold;
                                        color: #000;
                                        margin-bottom: 10px;
                                        text-align: center;'>
                                        Barcode: " . $row['BARCODE'] . "</p>";

                echo "<button class='btn btn-primary' style='
                                                                    border: none;'>
                                                                    <a href='cart.php?ID=" . $row['id'] . "' style='
                                                                            background-color: #f44336;
                                                                            color: white;
                                                                            padding: 14px 25px;
                                                                            text-align: center;
                                                                            text-decoration: none;
                                                                            display:inline-block;'>
                                                                            Remove</a></button>";

                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
    <?php
    if (isset($_GET['ID'])) {
        $conn = require 'Connection.php';
        $sql = "DELETE FROM tmp_cart WHERE id = '" . $_GET['ID'] . "';";
        $result = $conn->query($sql);
        echo "<script type='text/javascript'>window.location.href = 'cart.php';</script>";
    }

    ?>
</body>

</html>