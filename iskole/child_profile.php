<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_profile.css">
    <title>Edit Profile</title>
</head>
<body>
    <form action="" method="POST">
    <div class="sidebar">
        <a herf="child_dashboard.php">
       <button><img src="images/back.png" align="left" height="80px" width="60px"></button></a>
        
        
       <br><br><br><br><br><br>
      
  <a href="child_dashboard.php">Dashboard</a>
  <a href="#">My Courses</a>
  <a href="#">Quiz</a>
  <a href="child_profile.php">Profile</a>
  <a href="#">Payment</a>
  
   
  </div>
       
  
    <div class="main">
   
        <!-- <div class="icon-bar">
            <a class="active" href="#"><img src="images/home.png" height="30px" width="30px"/></a> 
            <a href="#"><img src="images/profile.png" height="30px" width="30px"/></a> 
            <a href="#"><img src="images/notifications.png" height="30px" width="30px"/></a> 
          </div> -->
          <div class="topic">
              <!-- <h1>Edit My Profile</h1> -->
          </div>
          <div class="main-form">

          <img src="images/logo.jpg" align="right" height="60px" width="60px">
          <div class="sidebar-main">
            <div class="sidebar-user">
                <br>   <br>   <br>   <br>   <br>
                <div class="circle">
                    <img src="images/baby.png" class="img-corner" alt="" height="70px" width="55px" >
                </div>
                
                 <div>
                <h3></h3>
                <span></span>
            </div>
         </div>
          <div class="form">
            
              <div id="contactform">

              <!-- <p class="contact"><label for="name"></label></p>
                  <input id="name" name="id" placeholder="ID" required="" tabindex="1" type="text">
                     -->
                  <p class="contact"><label for="name"></label></p>
                  <input id="name" name="first_name" placeholder="First Name" required="" tabindex="1" type="text">

                  <p class="contact"><label for="name"></label></p>
                  <input id="name" name="last_name" placeholder="Last Name" required="" tabindex="1" type="text">

                  <p class="contact"><label for="name"></label></p>
                  <input id="name" name="guardian's_name" placeholder="Guardian's Name" required="" tabindex="1" type="text">

                  <fieldset>
                    <label></label>
                     <label class="month"> 
                     <select class="select-style" name="BirthMonth">
                     <option value="">Month</option>
                     <option  value="01">January</option>
                     <option value="02">February</option>
                     <option value="03" >March</option>
                     <option value="04">April</option>
                     <option value="05">May</option>
                     <option value="06">June</option>
                     <option value="07">July</option>
                     <option value="08">August</option>
                     <option value="09">September</option>
                     <option value="10">October</option>
                     <option value="11">November</option>
                     <option value="12" >December</option>
                     </label>
                    </select>
                    <label><input class="birthday" maxlength="2" name="DOB"  placeholder="Day" required=""></label>
                <label> <input class="birthyear" maxlength="4" name="DOB" placeholder="Year" required=""></label>
              </fieldset>

                  <p class="contact"><label for="email"></label></p> 
                  <input id="email" name="email" placeholder="example@gmail.com" required="" type="email"> 

                  <!-- <p class="contact"><label for="email"></label></p> 
                  <input id="email" name="updated_email" placeholder="email_to_be_updated@gmail.com" required="" type="email">  -->

                  <!-- <p class="contact"><label for="oldpassword"></label></p> 
                  <input id="password" id="password" name="password" placeholder="Old Password" required="" type="text"> 

                  <p class="contact"><label for="password"></label></p> 
                  <input id="password" id="password" name="password" placeholder="New Password" required="" type="text"> 

                  <p class="contact"><label for="repassword"></label></p> 
                  <input id="password" id="password" name="password"  placeholder="Confirm Your Password" required="" type="text"> 
   -->
                  <p class="contact"><label for="phone"></label></p> 
                  <input id="phone" name="Mobile" placeholder="Mobile Number" required="" type="text"> <br>


                  <input class="buttom" name="submit" id="submit" tabindex="5" value="Save Changes" type="submit"> 
                  
              </div>
          </div>
    </div>
</div>
</form>
</body>
</html>

<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]', DOB='$_POST[DOB]',Mobile='$_POST[Mobile]' where email='$_POST[email]'";
        // $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]' where email='$_POST[email]'";
        
        $query_run = mysqli_query($connection,$query);

        if( $query_run){
            echo '<script> alert("Data Updated")</script>';

        }else{
            echo '<script> alert("Data Not Updated")</script>';

        }
    }


?>