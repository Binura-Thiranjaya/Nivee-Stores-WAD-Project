<?php
//INSERT STOCK
    $conn = require 'Connection.php';
    session_start();
    if(isset($_POST['addStock'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        $target = "Images/".basename($image);
        if($name == "" && $price == "" && $quantity == "" && $description == "" && $image == ""){
            echo "Please fill in all the fields";
        }else{
            //$sql = "INSERT INTO Stock (Name, Price, Quantity, Description, Image) VALUES ('$name', '$price', '$quantity', '$description', '$image')";
            //$result = mysqli_query($conn, $sql);
            // if($result){
            //     echo "Stock added successfully";
            //     if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            //         echo "Image uploaded successfully";
            //     }else{
            //         echo "Failed to upload image";
            //     }
            // }else{
            //     echo "Failed to add stock";
            // }
        }
       
    }
    echo $image;


    