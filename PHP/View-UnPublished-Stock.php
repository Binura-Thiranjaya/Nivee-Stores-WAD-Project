<?php
    $conn = require 'Connection.php';
    $sql = "SELECT * FROM `Stock` WHERE `STATUS` LIKE 'Unpublished' ORDER BY `STATUS`";
    $result = $conn->query($sql);
    //link css style
    echo "<link rel='stylesheet' href='../CSS/Admin-Portal.css'>";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
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
                echo "<img  src='data:image/jpeg;base64,".$row['IMAGE']."' alt=".$row['Name']." width=100px height=100px>";
                echo "<div class='viewAll-card-body'>";
                    echo "<h5 style='
                                    font-size: 20px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Name: ".$row['NAME']."</h5>";
                    echo "<p style='   
                                    font-size:10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Description:".$row['DESCRIPTION']."</p>";
                    echo "<p style='
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Price: ".$row['PRICE']."</p>";
                    echo "<p style='
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Quantity: ".$row['QUANTITY']."</p>";    
                    echo "<p style='
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Category: ".$row['CATEGORY']."</p>";
                    echo "<p style='
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Barcode: ".$row['BARCODE']."</p>";
                    echo "<p style='
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Created Date: ".$row['CREATED_AT']."</p>";

                    echo "<p style='
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Updated Date: ".$row['UPDATED_AT']."</p>";
                    echo "<p style='
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: #000;
                                    margin-bottom: 10px;
                                    text-align: center;'>
                                    Status: ".$row['STATUS']."</p>";
                    
                    echo "<button class='btn btn-primary'  style='
                                                                border: none;'>
                                                                <a href='Edit-Stock.php?ID=".$row['ID']."' style='
                                                                        background-color: #f44336;
                                                                        color: white;
                                                                        padding: 14px 25px;
                                                                        text-align: center;
                                                                        text-decoration: none;
                                                                        display:inline-block;'>
                                                                        Edit</a></button>"; 

                echo "</div>";
                echo "</div>";


            
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>