<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Homepage</title>
</head>
<body>
    <style>
        .btnlo{
            padding:20px;
            border-radius:20px;
            color:#000;
            box-shadow:2px 2px 1px #000;
            margin:40px;
            transition:0.3s ease-in-out;

        }
        .btnlo a{
            text-decoration:none;
            color: #000;
        }

        .btnlo:hover{
    transform: scale(1.1);



        }
    </style>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello,  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <button class="btnlo"><a href="logout.php">Logout</a></button>
    </div>
</body>
</html>