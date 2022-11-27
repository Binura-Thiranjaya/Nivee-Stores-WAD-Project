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
</style>

<body>
    <?php
    session_start();

    require 'View-Products.php';
    ?>
</body>
<footer>
    <p style="color: red;text-align:center;"><b>Welcome User:
            <?php
            echo $_SESSION['customer_email'];

            ?>
        </b></p>
</footer>

</html>