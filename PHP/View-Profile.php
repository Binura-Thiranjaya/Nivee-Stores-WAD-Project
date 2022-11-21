<?php
    $conn = require 'Connection.php';
    $sql = "SELECT * FROM `Users` WHERE `Email` LIKE '".$_SESSION['admin_email']."'";
    $result = $conn->query($sql);
    //link css style
    echo "<link rel='stylesheet' href='../CSS/Admin-Portal.css'>";

    if ($result->num_rows > 0) {
        // output data of each rows
        while($row = $result->fetch_assoc()) {
           //CARD
            echo "<div class='card' style='
                                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                                        transition: 0.3s;
                                        width: 40%;
                                        border-radius: 5px;
                                        text-align: center;
                                        margin: auto;
                                        '>";
            echo "<div class='container' style='
                                        padding: 2px 16px;'>";    
            echo "<h4><b>E-Mail: ".$row['Email']."</b></h4>";
            echo "<p><b>Password: </b>".$row['Password']."</p>";
            echo "<p><b>Role: </b>".$row['Role']."</p>";

            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>