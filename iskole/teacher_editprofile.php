<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:teacher_login.php');
}

$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'demo');

// if(isset($_POST['update'])){
//   $date = date('Y-m-d H:i:s');
//    $query="UPDATE teacher SET NIC='$_POST[NIC]',mobile='$_POST[mobile]',updated_at='$date' where teacher_id='$_SESSION[id]'";
//     $query_run = mysqli_query($connection,$query);

//     if($query_run){
//       echo '<script type="text/javascript"> alert("Data Updated")</script>';
//     }
//     else{
//       echo '<script type="text/javascript"> alert("Data not Updated")</script>';
//     }
// }

if(isset($_POST['update'])){
  $date = date('Y-m-d H:i:s');
  $query = "UPDATE teacher SET NIC='$_POST[NIC]', mobile='$_POST[mobile]',updated_at='$date' where teacher_id = '$_SESSION[id]'";
  // $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]' where email='$_POST[email]'";
  
  $query_run = mysqli_query($connection,$query);

  if( $query_run){
      echo '<script> alert("Your Profile Updated")</script>';

  }else{
      echo '<script> alert("Profile Not Updated")</script>';

  }
}

if(isset($_POST['update'])){
  $date = date('Y-m-d H:i:s');
   $query="UPDATE teacher_qualification SET qualification='$_POST[qualification]',updated_at='$date' where teacher_id='$_SESSION[id]'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
      echo '<script type="text/javascript"> alert("Data Updated")</script>';
    }
    else{
      echo '<script type="text/javascript"> alert("Data not Updated")</script>';
    }
}

// if(isset($_POST['update']))
// {
    
//         $date = date('Y-m-d H:i:s');
        
//             $sql = "insert into members (updated_at) values(:updated_at)";

// }



// if(isset($_POST['update'])){
//   $email = $_POST['email'];
//    $query="UPDATE teacher SET address='$_POST[address]' where email='$_POST[email]'";
//     $query_run = mysqli_query($connection,$query);

//     if($query_run){
//       echo '<script type="text/javascript"> alert("Data Inserted")</script>';
//     }
//     else{
//       echo '<script type="text/javascript"> alert("Data not Inserted")</script>';
//     }
// }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="teacher_editprofile.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="img/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class="las la-bell"></span>
                    <span class="las la-user-circle"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <img src="teacher_images/teacher2.jpg"  alt="">
                 <div>
                <h3>Ana Alexra</h3>
                <span>Ana@gmail.com</span>
            </div>
         </div>

         <div class="sidebar-menu">
               
          <ul>
            <li><a href="">
                <span class="las la-home"></span>Home
            </a></li>
            <li><a href="./teacher_dashboard.php">
                <span class="las la-tachometer-alt"></span>Dashboard
            </a></li>

            <li><a href="./teacher_subjects/mathematics/grade4/subjectindex.html">
                <span class="las la-book"></span>Subjects
            </a></li>

            <li><a href="./mystudents/mystudents.html"><span class="las la-users"></span>My Students</a></li>

            <li><a href="./quiz/quiz.html"><span class="las la-check-circle"></span>Tasks</a>
            </li>
             
             <li><a href="./analytics/progressreport.html"><span class="las la-chart-pie"></span>Analytics</a></li>

             <li><a href="./teacher_calendar/calendar.html">
                 <span class="las la-calendar"></span>Calendar
             </a></li>
             
             <li>
             <a href="./teacher_discussion/discussion.html">
                <span class="las la-users"></span>Discussion
            </a></li>

            
            <li><a href="./teacher_mailbox/mailbox.html"><span class="las la-envelope"></span>Mailbox</a></li>
            

            <li><a href="./teacher_finance/finance.html">
                <span class="las la-credit-card"></span>Finance
            </a></li>

         </ul>



        </div>
    </div>

</div>


        <div class="main-content">
            <header>
                <div class="menu-toggle">
                    <label for="sidebar-toggle">
                        <span class="las la-bars"></span>
                    </label>
                </div>
                

                <div class="header-icons">
                    <span class="las la-search"></span>
                    <span class="las la-bookmark"></span>
                    <span class="las la-sms"></span>
                </div>
            </header>

            <main>
                <div class="page-header">
                    <div class="dpandname">
                       
                           <img id="teacherprofile" src="teacher_images/teacher2.jpg">
                           <p id="p1">Ana Alexra</p>
                           <p id="p2">Teaher in Royal College</p>
                          <a href="#"><p id="p3">AnaAlexa@gail.com</p></a> 

                        
                    </div>
                 
                    <!-- <div class="header-actions">
                        <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a>

                    </div>
                   -->
                </div>
                
                <div class="container">
                   <div class="formdiv">
                    <form action="" method="POST">
                    
                        <div class="row">
                          <div class="col-25">
                            <label for="fname">First Name</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="first_name" name="first_name" placeholder="<?php echo ucfirst($_SESSION['first_name']); ?>" disabled>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Last Name</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="last_name" name="last_name" placeholder="<?php echo ucfirst($_SESSION['last_name']); ?>" disabled>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label for="lname">Email Address</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="email" name="email"placeholder="<?php echo ucfirst($_SESSION['email']); ?>" disabled>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="lname">NIC</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="NIC" name="NIC" placeholder="Your NIC number">
                            </div>
                          </div>

                          <!-- <div class="row">
                          <div class="col-25">
                            <label for="lname">Status</label>
                          </div>
                          <div class="col-75">
                            <input type="status" id="status" name="status" placeholder="Your status">
                          </div>
                        </div> -->

                          


                        <!-- <div class="row">
                          <div class="col-25">
                            <label for="dob">Date of Birth</label>
                          </div>
                          <div class="col-75">
                            <input type="date" id="DOB" name="DOB"  value="2018-07-22"
                            min="2021-01-01" max="2022-12-31">
                          </div>
                        </div> -->

                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Phone Number</label>
                          </div>
                          <div class="col-75">
                            <input type="tel" id="mobile" name="mobile" 
                            pattern="[0-9]{10}">

                          </div>
                        </div>
                        
                        
                         <!-- <div class="row">
                          <div class="col-25">
                            <label for="country">Country</label>
                          </div>
                          <div class="col-75">
                              <input type="text" id="country" name="country" placeholder="Your Country">
                            </div>
                          </div>
                        </div> 
                         <div class="row">
                            <div class="col-25">
                              <label for="lname">Address</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="address" name="address" placeholder="Your Address">
                            </div>
                          </div>  -->
                        <div class="row">
                          <div class="col-25">
                            <label for="subject">Subject</label>
                          </div>
                          <div class="col-75">
                            <select id="subject" name="subject">
                              <option value="maths">Mathematics</option>
                              <option value="sinhala">Sinhala</option>
                              <option value="english">English</option>
                              <option value="aesthetic">Aesthetic</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="subject">Subject</label>
                          </div>
                          <div class="col-75">
                            <select id="grade" name="grade">
                              <option value="grade1">Grade1</option>
                              <option value="grade2">Grade2</option>
                              <option value="grade3">Grade3</option>
                              <option value="grade4">Grade4</option>
                              <option value="grade4">Grade5</option>
                            </select>
                          </div>
                        </div>  
                        <div class="row">
                            <div class="col-25">
                              <label for="subject">Qualifications</label>
                            </div>
                            <div class="col-75">
                              <textarea id="qualification" name="qualification" placeholder="Qualifications.." style="height:400px"></textarea>
                              <a href="./teacher_upload qualifications/uploadqualification.html" id="upload" >Upload qualifications</a>
                            </div>
                          </div> 
                        <div class="buttons2">
                          <input type="submit" name="update" value="Update Profile">
                          <input type="submit1" value="Cancel">
                        </div>
                      </form>
                   </div>
                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>