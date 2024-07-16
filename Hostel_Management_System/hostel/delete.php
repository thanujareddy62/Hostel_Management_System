<?php

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



//getting key
$check = $_GET['student_id']; 

//deleting data from student table
$sql = "DELETE FROM mess WHERE student_id = '$check' ";
$result = mysqli_query($conn, $sql);

// check for if form submission  is not successful
if(!$result)
{
?>

<script>
  alert('Error deleting data of mess');
</script>

<?php

}


//deleting data from student table
$sql = "DELETE FROM laundary WHERE student_id = '$check' ";
$result2 = mysqli_query($conn, $sql);

// check for if form submission  is not successful
if(!$result2)
{
?>

<script>
  alert('Error deleting data of laundary');
</script>

<?php

}

//deleting data from student table
$sql = "DELETE FROM fee WHERE student_id = '$check' ";
$result3 = mysqli_query($conn, $sql);

// check for if form submission  is not successful
if(!$result3)
{
?>

<script>
  alert('Error deleting data of fee');
</script>

<?php

}

//deleting data from student table
$sql = "DELETE FROM student WHERE student_id = '$check' ";
$result4 = mysqli_query($conn, $sql);

// check for if form submission  is not successful
if(!$result4)
{
?>

<script>
  alert('Error deleting data of student');
</script>

<?php

}



// check for if data successfull deleted
if($result && $result2 && $result3 && $result4)
{
?>

<script>
  alert('DATA has deleted successfully');
</script>

<?php

}
else
{
  ?>

  <script>
    alert('Error deleting data');
  </script>
  
  <?php
  


}

?>