<?php
    //VIEW STOCK
    $conn = require 'Connection.php';
    $sql = "SELECT * FROM `Stock`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           //CARD
              echo "<div class='card' style='float:left;
              padding-left:2%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;'>";
                echo "<img class='card-img-top' src='data:image/jpeg;base64,".$row['IMAGE']."' alt='Card image cap' width=50%>";
                echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>".$row['NAME']."</h5>";
                  echo "<p class='card-text'>".$row['DESCRIPTION']."</p>";
                  echo "<p class='card-text'>Price: ".$row['PRICE']."</p>";
                  echo "<p class='card-text'>Quantity: ".$row['QUANTITY']."</p>";
                  echo "<p class='card-text'>Barcode: ".$row['BARCODE']."</p>";
                  echo "<p class='card-text'>Category: ".$row['CATEGORY']."</p>";
                  echo "<p class='card-text'>Status: ".$row['STATUS']."</p>";
                  echo "<p class='card-text'>Created At: ".$row['CREATED_AT']."</p>";
                  echo "<p class='card-text'>Updated At: ".$row['UPDATED_AT']."</p>";
                  echo "<p class='card-text'>Created By: ".$row['CREATED_BY']."</p>";
                  echo "<a href='#' class='btn btn-primary' style=' border: none;
                  outline: 0;
                  padding: 12px;
                  color: white;
                  background-color: #000;
                  text-align: center;
                  cursor: pointer;
                  width: 100%;
                  font-size: 18px;'>Go somewhere</a>";
                echo "</div>";
                echo "</div>";


            
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>