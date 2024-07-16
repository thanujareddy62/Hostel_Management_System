
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


/* *************************************************************************************************************************************************************************************************************** */
//creating database....
$sql = "CREATE DATABASE hams_db";
$result = mysqli_query($conn, $sql);


//Check for the database creation success
if(!$result){
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
    echo "<br>";
}




​
/* *************************************************************************************************************************************************************************************************************** */
// Create a tables in the db

//fee table
$sql = "CREATE TABLE `fee` ( `student_id` VARCHAR(20) NOT NULL ,  `monthly_rent` INT(10) NOT NULL ,  `concession` INT(10) NOT NULL DEFAULT '0' ,  `payment_method` VARCHAR(30) NOT NULL DEFAULT 'Credit & debit card',    PRIMARY KEY  (`student_id`))";
$result = mysqli_query($conn, $sql);

//mess table
$sql = "CREATE TABLE `mess` ( `student_id` VARCHAR(20) NOT NULL ,  `monthly_rate` INT(10) NOT NULL DEFAULT '10000' ,  `mess_type` VARCHAR(30) NOT NULL DEFAULT 'Pakistani Traditional',  `mess_timing` VARCHAR(20) NOT NULL DEFAULT 'Breakfast & Dinner',    PRIMARY KEY  (`student_id`))";
$result = mysqli_query($conn, $sql);

//laundary table
$sql = "CREATE TABLE `laundary` ( `student_id` VARCHAR(20) NOT NULL ,  `monthly_rate` INT(10) NOT NULL DEFAULT '5000' ,  `days` VARCHAR(20) NOT NULL DEFAULT 'Monday & Thursday' ,    PRIMARY KEY  (`student_id`)) ";
$result = mysqli_query($conn, $sql);

//appliance table
$sql = "CREATE TABLE `appliance` ( `appliance_id` VARCHAR(20) NOT NULL , `ac` VARCHAR(10) NOT NULL , `iron` VARCHAR(10) NOT NULL , `led` VARCHAR(10) NOT NULL , `ref` VARCHAR(10) NOT NULL , `ctable` VARCHAR(10) NOT NULL , `swm` VARCHAR(10) NOT NULL , PRIMARY KEY (`appliance_id`)) ";
$result = mysqli_query($conn, $sql);

//hostel table
$sql = "CREATE TABLE `hostel` ( `hostel_id` VARCHAR(20) NOT NULL ,  `h_name` VARCHAR(20) NOT NULL ,  `h_address` VARCHAR(50) NOT NULL ,  `contact_no` VARCHAR(20) NOT NULL ,  `rooms` INT(10) NOT NULL ,  `students` INT(10) NOT NULL ,  `manager_id` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`hostel_id`))";
$result = mysqli_query($conn, $sql);

//room table 
$sql = "CREATE TABLE `room` ( `room_id` VARCHAR(20) NOT NULL ,  `room_type` VARCHAR(20) ,  `charges` int(10) NOT NULL ,`roommates` int(10) NOT NULL ,  `hostel_id` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`room_id`)) ";
$result = mysqli_query($conn, $sql);

$sql = "ALTER TABLE `room` ADD CONSTRAINT `room_hostel_id_fk` FOREIGN KEY (`hostel_id`) REFERENCES `hostel`(`hostel_id`) ON DELETE RESTRICT ON UPDATE RESTRICT";
$result = mysqli_query($conn, $sql);


//student table
$sql = "CREATE TABLE `student` ( `student_id` VARCHAR(20) NOT NULL ,  `l_name` VARCHAR(20) NOT NULL ,  `r_name` VARCHAR(20) NOT NULL ,  `phone` VARCHAR(20) NOT NULL ,  `cnic` VARCHAR(20) NOT NULL ,  `blood` VARCHAR(5) NOT NULL ,  `institute` VARCHAR(30) NOT NULL ,  `dob` VARCHAR(20) NOT NULL ,  `gender` VARCHAR(10) NOT NULL ,
        `street` VARCHAR(20) NOT NULL ,  `code` VARCHAR(20) ,  `state` VARCHAR(20) NOT NULL ,  `district` VARCHAR(20) NOT NULL ,  `rollNo` VARCHAR(20) NOT NULL ,  `email` VARCHAR(30) NOT NULL ,  `pass` VARCHAR(10) NOT NULL ,  `room_id` VARCHAR(20) NOT NULL ,  
        `appliance_id` VARCHAR(20)  ,  `hostel_id` VARCHAR(20) NOT NULL , `admissionDate` DATE NOT NULL,    PRIMARY KEY  (`student_id`))";
$result = mysqli_query($conn, $sql);


$sql = "ALTER TABLE `student` ADD `sno` INT NOT NULL AUTO_INCREMENT FIRST, ADD INDEX `sno` (`sno`)";
$result = mysqli_query($conn, $sql);

//manager table
$sql = "CREATE TABLE `manager` ( `manager_id` VARCHAR(20) NOT NULL ,  `name` VARCHAR(20) NOT NULL ,  `phone` VARCHAR(20) DEFAULT 'Not provided' ,  `email` VARCHAR(30) NOT NULL ,  `address` VARCHAR(50) DEFAULT 'Not provided' ,  `cnic` VARCHAR(30) DEFAULT 'Not provided' ,  `hostel_id` VARCHAR(20) NOT NULL ,  `password` VARCHAR(10) NOT NULL ,    PRIMARY KEY  (`manager_id`)) ";
$result = mysqli_query($conn, $sql);


/* *************************************************************************************************************************************************************************************************************** */

//inserting dummy data to Appliance table
$sql = "INSERT INTO `appliance` (`appliance_id`, `data`)
        VALUES ('ap1', 'AC, Computer Table')";
$result = mysqli_query($conn, $sql);


//inserting dummy data to hostel table
$sql = "INSERT INTO `hostel` (`hostel_id`, `h_name`, `h_address`, `contact_no`, `rooms`, `students`, `manager_id`) 
VALUES ('HAMS', 'White SANDS HOSTEL', 'Main Street TOWN-SHIP LAHORE S34 4HE', '+92 3305 1122334', '100', '50', 'ADMIN')";
$result = mysqli_query($conn, $sql);

//inserting dummy data to manager table
$sql = "INSERT INTO `manager` (`manager_id`, `name`, `phone`, `email`, `address`, `cnic`, `hostel_id`, `password`) 
VALUES ('ADMIN', 'ADMIN', '03416010353', 'sam@gmail.com', 'Johr Town, Lahore', '3320211351427', 'HAMS', 'ADMIN')";
$result = mysqli_query($conn, $sql);

//inserting dummy data to manager table
$sql = "INSERT INTO `room` (`room_id`, `room_type`, `charges`, `rommates`, `hostel_id`) 
VALUES ('r1', 'CLASSIC Single ROOM', '10000', '3', 'HAMS')";
$result = mysqli_query($conn, $sql);





?>
