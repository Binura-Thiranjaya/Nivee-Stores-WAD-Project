
<?php
    session_start();
    $con = include 'Connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "" || $password == ""){
        echo "Please fill in all the fields";
    }else{
        $sql = "SELECT * FROM Users WHERE Email = '$email' AND Password = '$password'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if ($row['Role'] == 'Admin'){
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_email'] = $row['Email'];
                header("Location: Admin-Portal.php");
            }else if($row['Role'] == 'Customer'){
                $_SESSION['customer_id'] = $row['id'];
                $_SESSION['customer_email'] = $row['Email'];
                header("Location: Customer-Portal.php");
            }  
        }else{
            $insertSql = "INSERT INTO `Users`(`id`,`Email`, `Password`,`Role`) VALUES (NULL,'$email','$password','Customer')";
            $insertResult = mysqli_query($con, $insertSql);
            $last_id = mysqli_insert_id($con);
            $_SESSION['customer_id'] = $last_id;
            header("Location: Customer-Portal.php"); 
        }
    }
