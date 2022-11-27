
<?php
    session_start();
    $con = include 'Connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    //Check if the email is already in use
    $sql = "SELECT * FROM Users WHERE Email = '$email' AND Password = '$password' AND Role = 'Customer'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
                echo "<script type='text/javascript'>alert('User already exists');</script>";
    }
    else{
        //Check if the passwords match
        if($password == $confirmPassword){
            $sql = "INSERT INTO Users (Email, Password,Role) VALUES ('$email', '$password', 'Customer')";
            $result = mysqli_query($con, $sql);
            if($result){
                echo "<script type='text/javascript'>alert('User created');</script>";
                echo "<script type='text/javascript'>window.location.href = '../HTML/login.html';</script>";
            }
        }
        else{
            echo "<script type='text/javascript'>alert('Passwords do not match');</script>";
        }
    }

    
