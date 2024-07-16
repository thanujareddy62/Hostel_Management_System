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


$check = $_SESSION['user'];


//getting data from student table
$sql = "SELECT * FROM `student` where student_id = '$check'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);



//getting data from room table
$key = $row['room_id'];
$sql = "SELECT * FROM `room` where room_id = '$key'";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num2 = mysqli_num_rows($result);
// getting data in array
$row2 = mysqli_fetch_assoc($result);




//getting data from manager table
$sql = "SELECT * FROM `manager` where hostel_id = 'HAMS' ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num3 = mysqli_num_rows($result);
// getting data in array
$row3 = mysqli_fetch_assoc($result);



//getting data from hostel table
$sql = "SELECT * FROM `hostel` where hostel_id = 'HAMS' ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num4 = mysqli_num_rows($result);
// getting data in array
$row4 = mysqli_fetch_assoc($result);



//getting data from mess table
$key = $row['student_id'];
$sql = "SELECT * FROM `mess` where student_id = '$key' ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num5 = mysqli_num_rows($result);
// getting data in array
$row5 = mysqli_fetch_assoc($result);



//getting data from laundry table
$key = $row['student_id'];
$sql = "SELECT * FROM `laundary` where student_id = '$key' ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num6 = mysqli_num_rows($result);
// getting data in array
$row6 = mysqli_fetch_assoc($result);



//getting data from appliance table
$key = $row['appliance_id'];
$sql = "SELECT * FROM `appliance` where appliance_id = '$key' ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num7 = mysqli_num_rows($result);
// getting data in array
$row7 = mysqli_fetch_assoc($result);



//getting data from fee table
$key = $row['student_id'];
$sql = "SELECT * FROM `fee` where student_id = '$key' ";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num8 = mysqli_num_rows($result);
// getting data in array
$row8 = mysqli_fetch_assoc($result);

?>



<!-- ******************************************* html ************************************************************** -->

<html>
    
     <head>
        <title> student.HAMS </title>
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
       <span class="nav-item2"><a href="logoutlogin.php" class="nav-link">LOGOUT</a></span> 
      </div>

               
            <div class="page-content"> 
                <br> <br>   <h1>HOME AWAY MANAGEMENT SYSTEM</h1>   
                <br><br>
                 
                   <div class="page-content"> 
                          <br> <br>   
                          <h2> Welcome       "<?php echo $row['l_name'] .'  '. $row['r_name'] ?>"      </h2>  
                          <div class="table">    

                                  <span class="table1"> USERNAME: </span> 
                                  <span class="table1"> <?php echo $row['student_id'] ?> </span> 
                                  <span class="table1"> BOOKING DATE: </span> 
                                  <span class="table1"> <?php echo $row['admissionDate'] ?> </span>   
                                  <span class="table1"> BOOKING DATE: </span> 
                                  <span class="table1"> <?php echo $row['dob'] ?> </span>   
                                  <span class="table1"> CNIC: </span>
                                  <span class="table1"> <?php echo $row['cnic'] ?> </span>
                                  <span class="table1"> GENDER: </span>
                                  <span class="table1"> <?php echo $row['gender'] ?> </span>
                                  <span class="table1"> BLOOD GROUP: </span>
                                  <span class="table1"> <?php echo $row['blood'] ?> </span>
                                  <span class="table1"> ADDRESS:  </span>
                                  <span class="table1"> <?php echo $row['street'] . '  '. $row['district'] . '  ' . $row['state'] . '  ' . $row['code']  ?> </span>
                                  <span class="table1"> PHONE NO:  </span> 
                                  <span class="table1"> <?php echo $row['phone'] ?> </span>          
                                  <span class="table1"> EMAIL ID: </span>
                                  <span class="table1"> <?php echo $row['email'] ?> </span>
                                  <span class="table1"> Student of: </span>
                                  <span class="table1"> <?php echo $row['institute'] ?> </span>
                                  <span class="table1"> Roll No: </span>
                                  <span class="table1"> <?php echo $row['rollNo'] ?> </span>
                                  <span class="table1"> HOSTEL Name: </span>
                                  <span class="table1"> <?php echo $row4['h_name'] ?> </span>
                                  <span class="table1"> HOSTEL Contact No.: </span>
                                  <span class="table1"> <?php echo $row4['contact_no'] ?> </span>
                                  <span class="table1"> HOSTEL Address: </span>
                                  <span class="table1"> <?php echo $row4['h_address'] ?> </span>
 
                                </div>
                                <br><br>
                     

                 
                  </div>             
 
                    <br> <br>   
                    <h2> HOSTEL MANAGER DETAILS     </h2>  
                    <div class="table">    
                            <span class="table1">HOSTEL MANAGER NAME: </span> 
                            <span class="table1"> <?php echo $row3['name'] ?> </span>   
                            <span class="table1">HOSTEL MANAGER PHONE NO:  </span> 
                            <span class="table1"> <?php echo $row3['phone'] ?> </span>          
                            <span class="table1">HOSTEL MANAGER EMAIL ID: </span>
                            <span class="table1"> <?php echo $row3['email'] ?> </span>

                          </div>
                          <br><br>
                 
                          
                    <br> <br>   
                    <h2> APPLIANCES & EXPENCES      </h2>  
                    <div class="table">    
                            <span class="table1"> ROOM Type:  </span>
                            <span class="table1"> <?php echo $row2['room_type'] ?> </span>                               
                            <span class="table1"> Roommates:  </span>
                            <span class="table1"> <?php echo $row2['roommates'] ?> </span>                               
                            <span class="table1"> Mess Type: </span> 
                            <span class="table1"> <?php echo $row5['mess_type'] ?> </span>          
                            <span class="table1"> Mess Timing: </span> 
                            <span class="table1"> <?php echo $row5['mess_timing'] ?> </span>          
                            <span class="table1"> Laundry Days: </span> 
                            <span class="table1"> <?php echo $row6['days'] ?> </span>          
                            <span class="table1"> APPLIANCES Selected: </span>
                            <span class="table1"> <?php echo $row7['data'] ?> </span>
                            <span class="table1"> ROOM rent (monthly):  </span>
                            <span class="table1"> <?php echo $row2['charges'] ?> </span>                               
                            <span class="table1"> Mess fee (monthly): </span> 
                            <span class="table1"> <?php echo $row5['monthly_rate'] . "/-" ?> </span>          
                            <span class="table1"> Laundry fee (monthly): </span> 
                            <span class="table1"> <?php echo $row6['monthly_rate']."/-" ?> </span>          
                            <span class="table1"> CONSESSIONS:  </span> 
                            <span class="table1"> <?php echo $row8['concession']."/-" ?> </span>   
                            <span class="table1"> PAYMENT METHOD YOU SELECTED: </span>
                            <span class="table1"> <?php echo $row8['payment_method'] ?> </span> 
                            <span class="table1"> TOTAL EXPENCES PER MONTH: </span>
                            <span class="table1"> <?php echo $row8['monthly_rent']."/-" ?> </span>
                          </div>
                          <br><br>

                 <br>

                 <div>
                  <span class="nav-item2"><a href="logout.php" class="nav-link"><b> LOGOUT </b></a></span>
                  <br><br><br>
                </div>

           

             </div> 
            
                      
             <div class="bottom">
              <hr color="gold"/>
            
     <br><br> Main Street Anathapuram  <br>
     T:  +91 8765432345 E: thanuja@gmail.com  <br><br><br>
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


