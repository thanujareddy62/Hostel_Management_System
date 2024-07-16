<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        if (mysqli_num_rows($query) > 0) {
            // User found, redirect to another PHP file
            header("Location: ../hostel/index.php");
            exit(); // Ensure no further code is executed after redirection
        } else {
            // Handle the case where no user is found, if necessary
            echo "No user found.";
        }
        } else {
        // Handle the case where the email session variable is not set, if necessary
        echo "No session email set.";
        }
       ?>
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>
