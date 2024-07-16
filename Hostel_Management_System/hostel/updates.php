<?php 


//getting key
$check = $_GET['sno']; 


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



//getting data from student table
$sql = "SELECT * FROM `student` where sno = '$check'";
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



<html>
    
     <head>
        <title> UPDATE.HAMS </title>
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
                <br> <br>   <h1>UPDATE STUDENT DATA</h1>
                <br><br>
                <div class="table">    
                  <h3>Please provide the necessary Informmation</h3> <br><br>
    
                  <center>
                    <form action="#" method="POST">
                      <table>
                          <tr>
                            <td>NAME :</td>
                            <td><input type="text" placeholder="FIRST NAME*" name= "lname" value="<?php echo $row['l_name']; ?>" required>                      
                            <input type="text" placeholder="LAST NAME*" name= "rname" value="<?php echo $row['r_name']; ?>" required></td>
                          </tr>
                          <tr>
                            <td>DATE OF BIRTH :</td>
                            <td><input type="date" name="dob" value="<?php echo $row['dob']; ?>" required> 
                          </tr>
                          <tr>
                            <td>GENDER :</td>
                            <td>
                            <input type="radio" name="GENDER" value="male"
                            <?php
                            if($row['gender']=='male')
                            {
                              echo "checked";
                            }
                            ?> 
                            required> Male
                            <input type="radio" name="GENDER" value= "female" 
                            <?php
                            if($row['gender']=='female')
                            {
                              echo "checked";
                            }
                            ?>
                            required> Female
                            </td>
                          </tr>                          
                          <tr>
                            <td>PHONE NO. :</td>
                            <td>
                              <input type="number" placeholder="1234567890*" name="phone" value="<?php echo $row['phone']; ?>" required>
                            </td>
                          </tr>
                          <tr>
                            <td>ADDRESS :</td>
                            <td><input type="text" placeholder="Street/ Area *" name="street" value="<?php echo $row['street']; ?>" required>
                            <input type="number" placeholder=" post code/ house no. etc*" name ="code" value="<?php echo $row['code']; ?>" required>
                            <input type="text" placeholder=" STATE*" required name="state" value="<?php echo $row['state']; ?>">
                            <input type="text" placeholder="DISTRICT*" name="district" value="<?php echo $row['district']; ?>" required ></td>

                          </tr>
                          <tr>
                          <tr>
                            <td>CNIC :</td>
                            <td><input type="number" placeholder="XXXXXXXXXXXXX *" name="cnic" value="<?php echo $row['cnic']; ?>" required></td>
                          </tr>
                          <tr>
                            <td>BLOOD GROUP :</td>
                            <td>
                            <select name="blood">
                              <option disabled="disabled" value="NULL"
                              <?php
                              if($row['blood']=='NULL')
                            {
                              echo "selected";
                            }
                            ?> > select</option> 

                              <option value="A+"
                              <?php
                              if($row['blood']=='A+')
                            {
                              echo "selected";
                            }
                            ?> >A+</option>

                              <option value="B+"
                              <?php
                              if($row['blood']=='B+')
                            {
                              echo "selected";
                            }
                            ?> >B+</option>

                              <option value="AB+"
                              <?php
                              if($row['blood']=='AB+')
                            {
                              echo "selected";
                            }
                            ?> >AB+</option>

                              <option value="O+"
                              <?php
                              if($row['blood']=='O+')
                            {
                              echo "selected";
                            }
                            ?> >O+</option>

                              <option value="A-"
                              <?php
                              if($row['blood']=='A-')
                            {
                              echo "selected";
                            }
                            ?> >A-</option>

                              <option value="B-"
                              <?php
                            if($row['blood']=='B-')
                            {
                              echo "selected";
                            }
                            ?> >B-</option>

                              <option value="AB-"
                              <?php
                              if($row['blood']=='AB-')
                            {
                              echo "selected";
                            }
                            ?> >AB-</option>
                              <option value="O-"
                              <?php
                              if($row['blood']=='O-')
                            {
                              echo "selected";
                            }
                            ?> >O-</option>
                            </select>
                            </td>
                          </tr>

                              <tr>
                                <td>NAME OF INSTITUTE :</td>
                                <td>
                               <input type="text" placeholder="INSTITUTE TITLE*" name="institute" value="<?php echo $row['institute']; ?>" required>
                              </td>                           
                            </tr>
                            <tr>
                              <td>INSTITUTE R.NO.:</td>
                            <td>
                               <input type="text" placeholder="Institue Roll number*" name="rollno" value="<?php echo $row['rollNo']; ?>" required>
                            </td>                           
                          </tr>

                            <tr>
                              <td>EMAIL :</td>
                              <td><input type="email" placeholder="example@gamil.com*" name="email" value="<?php echo $row['email']; ?>" required></td>
                            </tr>

                            <tr>
                              <td>PASSWORD :</td>
                              <td><input type="password" placeholder="Enter password*" name="pass" value="<?php echo $row['pass']; ?>" required>       
                              </td>
                            </tr>

                            <tr>
                              <td>ROOM TYPE :</td>
                              <td>
                              <select name="roomType" required>
                                <option disabled="disabled" value="NULL"> Select room type</option>


                                <option value="r1"
                                <?php
                                  if($row['room_id']=='r1')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >CLASSIC Single ROOM (10,000/-)</option>
                                
                                <option value="r2"
                                <?php
                                  if($row['room_id']=='r2')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >SPECIAL SINGLE ROOM (20,000/-)</option>

                                <option value="r3"
                                <?php
                                  if($row['room_id']=='r3')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >CLASSIC DOUBLE ROOM (30,000/-)</option>

                                <option value="r4"
                                <?php
                                  if($row['room_id']=='r4')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >CLASSIC TWIN ROOM (7,000/-)</option>

                                <option value="r5"
                                <?php
                                  if($row['room_id']=='r5')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >SUPERIOR KING ROOM (8,000/-)</option>

                                <option value="r6"
                                <?php
                                  if($row['room_id']=='r6')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >SUPERIOR TWIN ROOM (12,000/-)</option>

                                <option value="r7"
                                <?php
                                  if($row['room_id']=='r7')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >SPECIAL TWIN ROOM (9,000/-)</option>

                                <option value="r8"
                                <?php
                                  if($row['room_id']=='r8')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >DELUXE KING ROOM (6,000/-)</option>

                                <option value="r9"
                                <?php
                                  if($row['room_id']=='r9')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >DELUXE TWIN ROOM (15,000/-)</option>

                                <option value="r10"
                                <?php
                                  if($row['room_id']=='r10')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >STUDIO SUITE ROOM (22,000/-)</option>

                                <option value="r11"
                                <?php
                                  if($row['room_id']=='r11')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >MASTER SUITE (25,000/-)</option>

                                <option value="r12"
                                <?php
                                  if($row['room_id']=='r12')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >MASTER SUITE 2 (10,000/-)</option>

                                <option value="r13"
                                <?php
                                  if($row['room_id']=='r13')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >MASTER SUITE 3 (10,000/-)</option>

                                <option value="r14"
                                <?php
                                  if($row['room_id']=='r14')
                                  {
                                    echo "selected";
                                  }
                                ?>
                                >MASTER SUITE 4 (20,000/-)</option>
                              </select>
                              </td>
                            </tr>
  


                            <tr>
                              <td>APPLIANCE :</td>
                              <td>
                              <select name="applianceID" required>
                                <option disabled="disabled" value="NULL">Select appliance type</option>

                                <option value="ap1"
                                <?php
                                  if($row['appliance_id']=='ap1')
                                  {
                                    echo "selected";
                                  }
                                ?> >AC, Computer Table</option>

                                <option value="ap2"
                                <?php
                                  if($row['appliance_id']=='ap2')
                                  {
                                    echo "selected";
                                  }
                                ?> >AC,IRON</option>

                                <option value="ap3"
                                <?php
                                  if($row['appliance_id']=='ap3')
                                  {
                                    echo "selected";
                                  }
                                ?> >AC,IRON,LED</option>
                                <option value="ap4"
                                <?php
                                  if($row['appliance_id']=='ap4')
                                  {
                                    echo "selected";
                                  }
                                ?>>AC,REF</option>

                                <option value="ap5"
                                <?php
                                  if($row['appliance_id']=='ap5')
                                  {
                                    echo "selected";
                                  }
                                ?>>Computer Table</option>
                                
                                <option value="ap6"
                                <?php
                                  if($row['appliance_id']=='ap6')
                                  {
                                    echo "selected";
                                  }
                                ?>>Computer Table, IRON </option>
                                
                                <option value="ap7"
                                <?php
                                  if($row['appliance_id']=='ap7')
                                  {
                                    echo "selected";
                                  }
                                ?> >Computer Table, Small Washing Machine</option>
                                
                                <option value="ap8"
                                <?php
                                  if($row['appliance_id']=='ap8')
                                  {
                                    echo "selected";
                                  }
                                ?> >AC,Small Washing Machine, LED</option>
                              </select>
                              </td>

                            </tr>


                            <tr>
                              <td>MESS (10,000/-) :</td>
                              <td>
                              <input type="radio" name="mess" value = "yes"
                              <?php
                                  if($row5['monthly_rate'] != 0)
                                  {
                                    echo "checked";
                                  }
                                ?> required> YES
                              <input type="radio" name="mess" value= "no"
                              <?php
                                  if($row5['monthly_rate'] ==  0)
                                  {
                                    echo "checked";
                                  }
                                ?> required> NO
                               <br><br>
                                <select name="messType">
                                <option value="Not specified"
                                <?php
                                  if($row5['mess_type']=='NULL')
                                  {
                                    echo "selected";
                                  }
                                ?> >Select MESS TYPE</option>
                                <option value="Chines"
                                <?php
                                  if($row5['mess_type']=='Chines')
                                  {
                                    echo "selected";
                                  }
                                ?> >Chines</option>
                                <option value="Russian"
                                <?php
                                  if($row5['mess_type']=='Russian')
                                  {
                                    echo "selected";
                                  }
                                ?> > Russian</option>
                                <option value="Pakistani Traditional"
                                <?php
                                  if($row5['mess_type']=='Pakistani Traditional')
                                  {
                                    echo "selected";
                                  }
                                ?> >Pakistani Traditional</option>
                                <option value="Strong Desi"
                                <?php
                                  if($row5['mess_type']=='Strong Desi')
                                  {
                                    echo "selected";
                                  }
                                ?> >Strong Desi</option>
                              </select> <br><br>

                              <select name="messTiming">
                                <option value="Not specified"
                                <?php
                                  if($row5['mess_timing']=='Not avail this offer')
                                  {
                                    echo "selected";
                                  }
                                ?> >Select MESS Timing</option>
                                <option value="Breakfast & Dinner"
                                <?php
                                  if($row5['mess_timing']=='Breakfast & Dinner')
                                  {
                                    echo "selected";
                                  }
                                ?> >Breakfast & Dinner</option>
                                <option value="Breakfast & Lunch"
                                <?php
                                  if($row5['mess_timing']=='Breakfast & Lunch')
                                  {
                                    echo "selected";
                                  }
                                ?> >Breakfast & Lunch</option>
                                <option value="lunch & Dinner"
                                <?php
                                  if($row5['mess_timing']=='lunch & Dinner')
                                  {
                                    echo "selected";
                                  }
                                ?> >lunch & Dinner </option>
                              </select>

                              </td>
                            </tr>

                            <tr>
                              <td>LAUNDRY (5000/-) :</td>
                              <td>
                              <input type="radio" name="laundry" value = "yes"
                              <?php
                                  if($row6['monthly_rate'] != 0)
                                  {
                                    echo "checked";
                                  }
                                ?>  required> YES
                              <input type="radio" name="laundry" value= "no"
                              <?php
                                  if($row6['monthly_rate'] == 0)
                                  {
                                    echo "checked";
                                  }
                                ?>  required> NO
                             <br><br>  
                                <select name="laundaryTiming">
                                  <option value="Not specified"
                                  <?php
                                  if($row6['days']=='Not avail this offer')
                                  {
                                    echo "selected";
                                  }
                                ?> >Select Laundry Days</option>
                                  <option value="wednesday & Saturday"
                                  <?php
                                  if($row6['days']=='wednesday & Saturday')
                                  {
                                    echo "selected";
                                  }
                                ?> >wednesday & Saturday</option>
                                  <option value="Monday & Thursday"
                                  <?php
                                  if($row6['days']=='Monday & Thursday')
                                  {
                                    echo "selected";
                                  }
                                ?> >Monday & Thursday</option>
                                  <option value="Tuesday & Friday"
                                  <?php
                                  if($row6['days']=='Tuesday & Friday')
                                  {
                                    echo "selected";
                                  }
                                ?> >Tuesday & Friday</option>
                                </select>

                              </td>
                            </tr>

                            <tr>
                              <td>Payment method :</td>
                              <td>
                              <select name="payment_method">

                                <option value="Not specified"
                                <?php
                                  if($row8['payment_method']=='Not specified')
                                  {
                                    echo "selected";
                                  }
                                ?> >Select Payment method</option>
                                <option value="Credit & debit card"
                                <?php
                                  if($row8['payment_method']=='Credit & debit card')
                                  {
                                    echo "selected";
                                  }
                                ?> >Credit & debit card</option>
                                <option value="eWallets"
                                <?php
                                  if($row8['payment_method']=='eWallets')
                                  {
                                    echo "selected";
                                  }
                                ?> >eWallets</option>
                                <option value="Bank transfers"
                                <?php
                                  if($row8['payment_method']=='Bank transfers')
                                  {
                                    echo "selected";
                                  }
                                ?> >Bank transfers</option>
                                <option value="Electronic checks"
                                <?php
                                  if($row8['payment_method']=='Electronic checks')
                                  {
                                    echo "selected";
                                  }
                                ?> >Electronic checks</option>
                              </select>
                              </td>
                            </tr>
                            <tr>
                              <td>CONCESSION :</td>
                              <td><input type="text" placeholder="concession*" name="concession" value="<?php echo $row8['concession']; ?>" required></td>
                            </tr>
                           
                          </table>  

                      <br>
                       <input type="submit" name="update"> 
                      </form>

                    </center>
 
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







<?php 


//check for setting of post method
if(isset($_POST['update']))
{

  $lname =  $_POST['lname'];
  $rname =  $_POST['rname'];
  $dob =  $_POST['dob'];
  $GENDER =  $_POST['GENDER'];
  $phone =  $_POST['phone'];
  $street =  $_POST['street'];
  $code =  $_POST['code'];
  $state =  $_POST['state'];
  $district =  $_POST['district'];
  $cnic =  $_POST['cnic'];
  $blood =  $_POST['blood'];
  $institute =  $_POST['institute'];
  $rollno =  $_POST['rollno'];
  $email =  $_POST['email'];
  $pass =  $_POST['pass'];
  $roomType =  $_POST['roomType'];
  $applianceID =  $_POST['applianceID'];
  $mess    =  $_POST['mess'];
  $messType =  $_POST['messType'];
  $messTiming   =  $_POST['messTiming'];
  $laundry =  $_POST['laundry'];
  $laundaryTiming =  $_POST['laundaryTiming'];
  $payment_method =  $_POST['payment_method'];
  $concession = $_POST['concession'];
  $check = $_GET['sno'];
  $key = $row['student_id'];

//storing the price of the room
  switch ($roomType)
  {
    case "r1":
      $total = 10000;
      break;
    case "r2":
      $total = 20000;
      break;
    case "r3":
      $total = 30000;
      break;
    case "r4":
      $total = 7000;
      break;
    case "r5":
      $total = 8000;
      break;
    case "r6":
      $total = 12000;
      break;
    case "r7":
      $total = 9000;
      break;
    case "r8":
      $total = 6000;
      break;
    case "r9":
      $total = 15000;
      break;
    case "r10":
      $total = 22000;
      break;
    case "r11":
      $total = 25000;
      break;
    case "r12":
      $total = 10000;
      break;
    case "r13":
      $total = 10000;
      break;
    case "r14":
      $total = 20000;
      break;
    default:
     $total = 10000;
     break;
  }

//student table

$sql = "UPDATE `student` SET `l_name` = '$lname', `r_name` = '$rname', `phone` = '$phone', `cnic` = '$cnic', `blood` = '$blood', `institute` = '$institute', `dob` = '$dob', `gender` = '$GENDER', `street` = '$street', `code` = '$code', `state` = '$state',
 `district` = '$district', `rollNo` = '$rollno', `email` = '$email', `pass` = '$pass', `room_id` = '$roomType', `appliance_id` = '$applianceID'
 WHERE `student`.`student_id` = '$key' ";

$result1 = mysqli_query($conn, $sql);


// check for if form submission  is not successful
if(!$result1)
{
?>

<script>
  alert('Error updating data in student');
</script>

<?php

}





//if user select yes then it will insert data to landry table otherwise no data would be iserted in the laundry table
if($laundry == "yes")
{
$sql = "UPDATE `laundary` SET `monthly_rate` = '5000', `days` = '$laundaryTiming' 
        WHERE `laundary`.`student_id` = '$key'";  
$result2 = mysqli_query($conn, $sql);
$total = $total + 5000;
}
else 
{
  $sql = "UPDATE `laundary` SET `monthly_rate` = '0', `days` = 'Not awail this offer' 
  WHERE `laundary`.`student_id` = '$key'";  
$result2 = mysqli_query($conn, $sql);
}


// check for if form submission  is not successful
if(!$result2)
{
?>

<script>
  alert('Error updating data of laundry');
</script>

<?php

}


//updated_test 12345




//if user select yes the it will insert data to mess table otherwise no data would be iserted in the mess table
if($mess == "yes")
{
  $sql = "UPDATE `mess` SET `monthly_rate` = '10000', `mess_type` = '$messType', `mess_timing` = '$messTiming' 
          WHERE `mess`.`student_id` = '$key' ";
  $result3 = mysqli_query($conn, $sql);
  $total = $total + 10000;
}
else 
{
  $sql = "UPDATE `mess` SET `monthly_rate` = '0', `mess_type` = 'NULL', `mess_timing` = 'Not avail this offer' 
          WHERE `mess`.`student_id` = '$key' ";
  $result3 = mysqli_query($conn, $sql);
}
// check for if form submission  is not successful
if(!$result3)
{
?>

<script>
  alert('Error updating data of mess');
</script>

<?php

}

//inserting data to the fee table 
$sql = "UPDATE `fee` SET `monthly_rent` = '$total', `concession` = '$concession', `payment_method` = '$payment_method' 
        WHERE `fee`.`student_id` = '$key'";

$result4 = mysqli_query($conn, $sql);

// check for if form submission  is not successful
if(!$result4)
{
?>

<script>
  alert('Error submitting data in fee');
</script>

<?php

}

// check for if connection was not successful
if($result1 && $result2 && $result3 && $result4)
{
?>

<script>
  alert('DATA has updated');
</script>

<?php

}
else
{
  ?>

  <script>
    alert('Error updating in data');
  </script>
  
  <?php
  
}



}


?>
