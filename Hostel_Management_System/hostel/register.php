<?php include 'php_register.php';?>


<html>
    
     <head>
        <title> Register.HAMS </title>
        <link rel="stylesheet" href="stylesheet.css" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    
    <body>   


      <div class="navigationbar">
        <span class="nav-item1"><a href="index.php" class="nav-link">HOME</a></span>  
        <span class="nav-item2"><a href="room.php" class="nav-link">ROOMS</a></span>  
        <span class="nav-item1"><a href="specialoffers.php" class="nav-link">OFFERS AVAILABLE</a></span>  
        <span class="nav-item1"><a href="location.php" class="nav-link">LOCATION</a></span>  
  	<span class="nav-item2"><a href="contact.php" class="nav-link">CONTACT /LOGIN</a></span> 
 	<span class="nav-item2"><a href="logoutlogin.php" class="nav-link">LOGOUT</a></span>  
      </div>

               
            <div class="page-content"> 
                <br> <br>   <h1>Registration</h1>   
                <br><br>
                <div class="table">    
                  <h3>Please provide the necessary Informmation</h3> <br><br>
    
                  <center>
                    <form action="register.php" method="POST">
                      <table>
                          <tr>
                            <td>NAME :</td>
                            <td><input type="text" placeholder="FIRST NAME*" name= "lname" required>                      
                            <input type="text" placeholder="LAST NAME*" name= "rname" required></td>
                          </tr>
                          <tr>
                            <td>DATE OF BIRTH :</td>
                            <td><input type="date" name="dob" required> 
                          </tr>
                          <tr>
                            <td>GENDER :</td>
                            <td>
                            <input type="radio" name="GENDER" value = "male" required> Male
                            <input type="radio" name="GENDER" value= "female" required> Female
                            </td>
                          </tr>                          
                          <tr>
                            <td>PHONE NO. :</td>
                            <td>
                              <input type="number" placeholder="1234567890*" name="phone" required>
                            </td>
                          </tr>
                          <tr>
                            <td>ADDRESS :</td>
                            <td><input type="text" placeholder="Area/ Street*" name="street" required>
                            <input type="number" placeholder=" post code/ house no. etc*" name ="code" required>
                            <input type="text" placeholder=" STATE*" required name="state">
                            <input type="text" placeholder="DISTRICT*" name="district" required></td>

                          </tr>
                          <tr>
                          <tr>
                            <td>CNIC :</td>
                            <td><input type="number" placeholder="XXXXXXXXXXXXX *" name="cnic" required></td>
                          </tr>
                          <tr>
                            <td>BLOOD GROUP :</td>
                            <td>
                            <select name="blood">
                              <option disabled="disabled" value="NULL">select</option>                              
                              <option value="A+">A+</option>
                              <option value="B+">B+</option>
                              <option value="AB+">AB+</option>
                              <option value="O+">O+</option>
                              <option value="A-">A-</option>
                              <option value="B-">B-</option>
                              <option value="AB-">AB-</option>
                              <option value="0-">O-</option>
                            </select>
                            </td>
                          </tr>

                              <tr>
                                <td>NAME OF INSTITUTE :</td>
                                <td>
                               <input type="text" placeholder="INSTITUTE TITLE*" name="institute" required>
                              </td>                           
                            </tr>
                            <tr>
                              <td>INSTITUTE R.NO.:</td>
                            <td>
                               <input type="text" placeholder="Institue Roll number*" name="rollno" required>
                            </td>                           
                          </tr>

                            <tr>
                              <td>EMAIL :</td>
                              <td><input type="email" placeholder="example@gamil.com*" name="email" required></td>
                            </tr>
                            <tr>
                              <td>Username :</td>
                              <td><input type="text" placeholder="enter a unique Username*" name="studentID" required></td>
                            </tr>

                            <tr>
                              <td>PASSWORD :</td>
                              <td><input type="password" placeholder="Enter password*" name="pass" required>       
                              <input type="password" placeholder="Confirm password*" name="conpass" required></td>
                            </tr>

                            <tr>
                              <td>ROOM TYPE :</td>
                              <td>
                              <select name="roomType" required>
                                <option disabled="disabled" value="NULL"> Select room type</option>
                                <option value="r1">CLASSIC Single ROOM (10,000/-)</option>
                                <option value="r2">SPECIAL SINGLE ROOM (20,000/-)</option>
                                <option value="r3">CLASSIC DOUBLE ROOM (30,000/-)</option>
                                <option value="r4">CLASSIC TWIN ROOM (7,000/-)</option>
                                <option value="r5">SUPERIOR KING ROOM (8,000/-)</option>
                                <option value="r6">SUPERIOR TWIN ROOM (12,000/-)</option>
                                <option value="r7">SPECIAL TWIN ROOM (9,000/-)</option>
                                <option value="r8">DELUXE KING ROOM (6,000/-)</option>
                                <option value="r9">DELUXE TWIN ROOM (15,000/-)</option>
                                <option value="r10">STUDIO SUITE ROOM (22,000/-)</option>
                                <option value="r11">MASTER SUITE (25,000/-)</option>
                                <option value="r12">MASTER SUITE 2 (10,000/-)</option>
                                <option value="r13">MASTER SUITE 3 (10,000/-)</option>
                                <option value="r14">MASTER SUITE 4 (20,000/-)</option>
                              </select>
                              </td>
                            </tr>
  
                            <tr>
                              <td>APPLIANCE :</td>
                              <td>
                              <select name="applianceID" required>
                                <option disabled="disabled" value="NULL">Select appliance type</option>
                                <option value="ap1">AC, Computer Table</option>
                                <option value="ap2">AC,IRON</option>
                                <option value="ap3">AC,IRON,LED</option>
                                <option value="ap4">AC,REF</option>
                                <option value="ap5">Computer Table</option>
                                <option value="ap6">Computer Table, IRON </option>
                                <option value="ap7">Computer Table, Small Washing Machine</option>
                                <option value="ap8">AC,Small Washing Machine, LED</option>
                              </select>
                              </td>

                            </tr>


                            <tr>
                              <td>MESS (10,000/-) :</td>
                              <td>
                              <input type="radio" name="mess" value = "yes" required> YES
                              <input type="radio" name="mess" value= "no" required> NO
                               <br><br>
                                <select name="messType">
                                <option value="Not specified">Select MESS TYPE</option>
                                <option value="Chines">Chines</option>
                                <option value="Russian"> Russian</option>
                                <option value="Pakistani Traditional">Pakistani Traditional</option>
                                <option value="Strong Desi">Strong Desi</option>
                              </select> <br><br>

                              <select name="messTiming">
                                <option value="Not specified">Select MESS Timing</option>
                                <option value="Breakfast & Dinner">Breakfast & Dinner</option>
                                <option value="Breakfast & Lunch">Breakfast & Lunch</option>
                                <option value="lunch & Dinner">lunch & Dinner </option>
                              </select>

                              </td>
                            </tr>

                            <tr>
                              <td>LAUNDRY (5000/-) :</td>
                              <td>
                              <input type="radio" name="laundry" value = "yes" required> YES
                              <input type="radio" name="laundry" value= "no" required> NO
                             <br><br>  
                                <select name="laundaryTiming">
                                  <option value="Not specified">Select Laundry Days</option>
                                  <option value="wednesday & Saturday">wednesday & Saturday</option>
                                  <option value="Monday & Thursday">Monday & Thursday</option>
                                  <option value="Tuesday & Friday">Tuesday & Friday</option>
                                </select>

                              </td>
                            </tr>

                            <tr>
                              <td>Payment method :</td>
                              <td>
                              <select name="payment_method">
                                <option value="Not specified">Select Payment method</option>
                                <option value="Credit & debit card">Credit & debit card</option>
                                <option value="eWallets">eWallets</option>
                                <option value="Bank transfers">Bank transfers</option>
                                <option value="Electronic checks">Electronic checks</option>
                              </select>
                              </td>
                            </tr>
                            
                          </table>  

                      <br>
                       <input type="submit" value="REGISTER" name="submit"> 
                      </form>

                    </center>
 
                  </div>             
             </div> 
            
                      
             <div class="bottom">
              <hr color="gold"/>
            
     <br><br> Main Street TOWN-SHIP LAHORE S34 4HE  <br>
     T:  +92 3305 1122334 E: info@HAMS-LAHORE.co.pk  <br><br><br>
                <span class="nav-item4"><a href="privicypolicy.html" class="nav-link">Privacy Policy</a></span>   
            <span class="nav-item4"><a href="specialoffers.html" class="nav-link">Avail Offers</a></span>  
            <span class="nav-item4"><a href="food&drinks.html" class="nav-link">Mess Food List</a></span>
            <span class="nav-item4"><a href="location.html" class="nav-link">Location</a></span>        
           <hr color="gold"/>
         </div>
                        
         <div class="copy-right">
          &copy; HostelWebsite by HOME AWAY MANAGEMENT SYSTEM. All Rights Reserved.	 
     </div>  
   </body>
</html>


