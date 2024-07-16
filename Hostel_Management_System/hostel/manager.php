<?php
session_start(); 
if(!isset($_SESSION['user']))
{
  header('location:contact.php');
}


// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "hams_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password , $database);

// check for if connection was not successful
if(!$conn)
{
?>

<script>
  alert('Databse is not connected')
</script>

<?php
die("Sorry we failed to connect: ". mysqli_connect_error());
}


//getting the data through session variable
$check = $_SESSION['user'];


//getting data from student table
$sql = "SELECT * FROM `manager` where manager_id = '$check'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);



//getting data from student table
$sql = "SELECT * FROM `student` ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num2 = mysqli_num_rows($result);
// getting data in array
$row2 = mysqli_fetch_assoc($result);




//getting data from manager table
$sql = "SELECT * FROM `room` where hostel_id = 'HAMS' ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num3 = mysqli_num_rows($result);
// getting data in array
$row3 = mysqli_fetch_assoc($result);






?>





<!-- ************************************** html ***************************************************** -->
<html>
    
     <head>
        <title> manager.HAMS </title>
        <link rel="stylesheet" href="stylesheet.css" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    
    
    <body>   

      <div class="navigationbar">
        <span class="nav-item1"><a href="location.php" class="nav-link">LOCATION</a></span>   
        <span class="nav-item1"><a href="specialoffers.php" class="nav-link">OFFERS AVAILABLE </a></span>  
        <span class="nav-item1"><a href="home.php" class="nav-link">HOME</a></span>  
        <span class="nav-item2"><a href="contact.php" class="nav-link">CONTACT /LOGIN</a></span>
       <span class="nav-item2"><a href="room.php" class="nav-link">ROOMS</a></span>   
      </div>

               
            <div class="page-content"> 
                <br> <br>   <h1>HOME AWAY MANAGEMENT SYSTEM</h1>   
                <br><br>
                 
                   <div class="page-content"> 
                          <br> <br>   
                          <h2> Welcome       "<?php echo $row['name']; ?>"      </h2>  
                          <div class="table">    

                                  <span class="table1"> USERNAME: </span> 
                                  <span class="table1"> <?php echo $row['manager_id'] ?> </span>   
                                  <span class="table1"> CNIC: </span>
                                  <span class="table1"> <?php echo $row['cnic'] ?> </span>
                                  <span class="table1"> ADDRESS:  </span>
                                  <span class="table1"> <?php echo $row['address'] ?> </span>
                                  <span class="table1"> PHONE NO:  </span> 
                                  <span class="table1"> <?php echo $row['phone'] ?> </span>          
                                  <span class="table1"> EMAIL ID: </span>
                                  <span class="table1"> <?php echo $row['email'] ?> </span>
                                  <span class="table1"> HOSTEL ID: </span>
                                  <span class="table1"> <?php echo $row['hostel_id'] ?> </span>

                                </div>
                                <br><br>
                     

                 
                  </div>             
<br><br><br>

<div class="table-four">
            <table>
              <tr>    <h2>Students' DATA  </h2></tr>
                <tr>
                  <td><b> Sr.No </b> </td> <td><b> USERNAME </b></td> <td><b> PHONE</b> </td> <td><b> INSTITUTE</b> </td> <td> <b>CONCESSION</b> </td> <td> <b>TOTAL FEE</b> </td>  <td colspan="2"><b> OPERATIONS </b></td>                
                </tr>
          
          
                <?php 

                      //getting data from student table
                      $sql4 = "SELECT * FROM `student` ";
                      $result4 = mysqli_query($conn, $sql4);
                      // Find the number of records returned
                      $num4 = mysqli_num_rows($result4);
                      

                      //getting data from fee table
                      $sql5 = "SELECT * FROM `fee` ";
                      $result5 = mysqli_query($conn, $sql5);
                      // Find the number of records returned
                      $num5 = mysqli_num_rows($result5);
                      
                $i = 0; //variable used to display Sr no.
                //loop for printing the data of the students
               while( $row4 = mysqli_fetch_assoc($result4))
               {
                $row5 = mysqli_fetch_assoc($result5);
                  $i++;
                   ?>
                <tr>
                  <td> <?php echo $i; ?> </td> 
                  <td> <?php echo $row4['student_id'] ?>  </td>  
                  <td> <?php echo $row4['phone'] ?> </td>
                  <td> <?php echo $row4['institute'] ?> </td> 
                  <td> <?php echo $row5['concession'] ?> </td>  
                  <td> <?php echo $row5['monthly_rent'] ?> </td>  
                  <td>  <a href="updates.php?sno=<?php echo $row4['sno'];?>" ><font color="green"> <b> EDIT </b> </font></a></td>
                  <td>  <a href="delete.php?student_id=<?php echo $row4['student_id'];?>" ><font color="red"> <b> DELETE </b> </font></a></td>
                </tr>
                
                <?php  } ?>
            
              </table>
        </div>
                   <br> <br> <br> <br>   
                 <div>
                  <span class="nav-item2"><a href="logout.php" class="nav-link"><b> LOGOUT </b></a></span>
                  <br><br><br>
                </div>

             </div> 
            
                      
             <div class="bottom">
              <hr color="gold"/>
            
     <br><br> Main Street TOWN-SHIP LAHORE S34 4HE  <br>
     T:  +92 3305 1122334 E: info@HAMS-LAHORE.co.pk  <br><br><br>
                <span class="nav-item4"><a href="privicypolicy.php" class="nav-link">Privacy Policy</a></span>   
            <span class="nav-item4"><a href="specialoffers.php" class="nav-link">Avail Offers</a></span>  
            <span class="nav-item4"><a href="food&drinks.php" class="nav-link">Mess Food List</a></span>
            <span class="nav-item4"><a href="location.php" class="nav-link">Location</a></span>        
           <hr color="gold"/>
         </div>
                        
         <div class="copy-right">
          &copy; HostelWebsite by HOME AWAY MANAGEMENT SYSTEM. All Rights Reserved.	 
     </div>  
   </body>
</html>
