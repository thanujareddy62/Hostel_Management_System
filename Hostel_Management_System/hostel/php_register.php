<?php



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



//getting data from form to variables
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
  $studentID =  $_POST['studentID'];
  $pass =  $_POST['pass'];
  $conpass =  $_POST['conpass'];
  $roomType =  $_POST['roomType'];
  $applianceID =  $_POST['applianceID'];
  $mess    =  $_POST['mess'];
  $messType =  $_POST['messType'];
  $messTiming   =  $_POST['messTiming'];
  $laundry =  $_POST['laundry'];
  $laundaryTiming =  $_POST['laundaryTiming'];
  $payment_method =  $_POST['payment_method'];
  


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




//**************************************************************************************************************************************************
            // Input validations
//**************************************************************************************************************************************************

  //name validation
if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
{
  ?>

  <script>
    alert('Error!!! Invalid first name');
  </script>

  <?php
  die("Sorry we failed to submit data. Please enter a just letters and white spaces");
  }
  //right name
  if (!preg_match("/^[a-zA-Z-' ]*$/",$rname)) 
    {
      ?>
    
      <script>
        alert('Error!!! Invalid last name');
      </script>
    
      <?php
      die("Sorry we failed to submit data. Please enter a just letters and white spaces");
      }

  //phone number input validation
  if(strlen($phone) != 10)
  {
  ?>

  <script>
    alert('Error!!! Invalid Phone number');
  </script>

  <?php
  die("Sorry we failed to submit data. Please enter a valid phone number");
  }


  //CNIC input validation
  if(strlen($cnic) != 13)
  {
  ?>

  <script>
    alert('Error!!! Invalid CNIC');
  </script>

  <?php
  die("Sorry we failed to submit data. Please enter a valid CNIC");
  }


  //email validations
  if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
  {
   ?>
  
    <script>
      alert('Error!!! Invalid email');
    </script>
  
    <?php
    die("Sorry we failed to submit data. Please enter a valid email address");
  }


  //password input validations
  if($pass != $conpass)
  {
  ?>

  <script>
    alert('Error!!! difference password enter');
  </script>

  <?php
  die("Sorry we failed to submit data because you entered different passwords");
  }
  
  $sql = "SELECT * FROM `student` WHERE `student_id` = '$studentID' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  $row2 = mysqli_fetch_assoc($result);
  if($num > 0)
  {
  ?>

  <script>
    alert('Error!!! USERNAME already exist');
  </script>

  <?php
  die("Sorry we failed to submit data. Please enter a unique username");
  }



  //**************************************************************************************************************************************************
            // Inserting data
//**************************************************************************************************************************************************

//student table
$sql = "INSERT INTO `student` (`student_id`, `l_name`, `r_name`, `phone`, `cnic`, `blood`, `institute`, `dob`, `gender`, `street`, `code`, `state`, `district`, `rollNo`, `email`, `pass`, `room_id`, `appliance_id`, `hostel_id`, `admissionDate`)
                        VALUES ('$studentID','$lname','$rname','$phone','$cnic','$blood',  '$institute','$dob', '$GENDER','$street','$code','$state','$district','$rollno','$email','$pass',  '$roomType','$applianceID','HAMS',now()) ";
$result1 = mysqli_query($conn, $sql);


// check for if form submission  is not successful
if(!$result1)
{
?>

<script>
  alert('Error submitting data in student');
</script>

<?php

}


//if user select yes then it will insert data to landry table otherwise no data would be iserted in the laundry table
if($laundry == "yes")
{
$sql = "INSERT INTO `laundary` (`student_id`, `monthly_rate`, `days`) VALUES ('$studentID', '5000', '$laundaryTiming')";
$result2 = mysqli_query($conn, $sql);
$total = $total + 5000;
}
else 
{
  $sql = "INSERT INTO `laundary` (`student_id`, `monthly_rate`, `days`) VALUES ('$studentID', '0', 'Not awail this offer')";
  $result2 = mysqli_query($conn, $sql);  
}


// check for if form submission  is not successful
if(!$result2)
{
?>

<script>
  alert('Error submitting data of laundry');
</script>

<?php

}


//if user select yes the it will insert data to mess table otherwise no data would be iserted in the mess table
if($mess == "yes")
{
  $sql = "INSERT INTO `mess` (`student_id`, `monthly_rate`, `mess_type`, `mess_timing`) 
  VALUES ('$studentID', '10000', '$messType', '$messTiming')";
  $result3 = mysqli_query($conn, $sql);
  $total = $total + 10000;
}
else 
{
  $sql = "INSERT INTO `mess` (`student_id`, `monthly_rate`, `mess_type`, `mess_timing`) 
  VALUES ('$studentID', '0', 'NULL', 'Not avail this offer')";
  $result3 = mysqli_query($conn, $sql);
}
// check for if form submission  is not successful
if(!$result3)
{
?>

<script>
  alert('Error submitting data of mess');
</script>

<?php

}

//inserting data to the fee table 
$sql = "INSERT INTO `fee` (`student_id`, `monthly_rent`, `concession`, `payment_method`) 
VALUES ('$studentID', '$total', '0', '$payment_method')";
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
  alert('Your form has submitted')
</script>

<?php

}
else
{
  ?>

  <script>
    alert('Error submitting in data')
  </script>
  
  <?php
  
}


}


?>
