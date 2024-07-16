<?php
session_start();



//check for setting of post method
if(isset($_POST['submit']))
{
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "hams_db";

  
// Create a connection
$conn = mysqli_connect($servername, $username, $password , $database);



$user =  $_POST['st_username'];
$pass =  $_POST['st_pass'];

//creating a session variable to store data on the server
$_SESSION['user'] = $user;



$sql = "SELECT * FROM `student` where student_id = '$user' and pass = '$pass' ";
$result = mysqli_query($conn, $sql);


// Find the number of records returned
$row = mysqli_num_rows($result);

if($row == 1)
{     
    header('location:student.php'); 
}
else
{

  $sql = "SELECT * FROM `manager` where manager_id = '$user' and pass = '$pass' ";
  $result = mysqli_query($conn, $sql);


  // Find the number of records returned
  $row = mysqli_num_rows($result);

  if($row == 1)
  {     
      header('location:manager.php'); 
  }
  else
  {
      header('location:contact.php');    
  }

}

}

?>

