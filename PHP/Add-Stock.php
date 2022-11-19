<?php
//INSERT STOCK
    $conn = require 'Connection.php';
    session_start();
    if(isset($_POST['addStock'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $barcode = $_POST['barcode'];
        $status = $_POST['status'];
        $category = $_POST['category'];
        
        if($_FILES['image']['name'] != ""){
            $ENCODE_IMAGE = base64_encode(file_get_contents($_FILES['image']['tmp_name']));//encode image to base64
        }
        else{
            $ENCODE_IMAGE = "No Image Uploaded";
        }
        $CREATED_DATE = date("Y-m-d H:i:s");
        $CREATED_BY = $_SESSION['admin_email'];
        
        if($name == "" && $barcode =="" && $price == ""){
            echo "Enter Informations";
        }else{
            $sql = "INSERT INTO `Stock`(`ID`, `BARCODE`, `NAME`, `DESCRIPTION`, `PRICE`, `QUANTITY`, `IMAGE`, `CATEGORY`, `STATUS`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`) VALUES (NULL,'$barcode','$name','$description','$price','$quantity','$ENCODE_IMAGE','$catergory','$status','$CREATED_DATE',NULL,'$CREATED_BY')";

            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
                header("Location: Admin-Portal.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        $conn->close();   
    }




    