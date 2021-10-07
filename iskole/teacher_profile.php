<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:teacher_login.php');
}

$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'demo');


$query="SELECT * FROM teacher";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
          
                $NIC= $row['NIC'] ;
                $mobile   =  $row['mobile'] ;
               
        }}}

$query="SELECT * FROM teacher_qualification";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
          
                $qualification= $row['qualification'] ;
                // $mobile   =  $row['mobile'] ;
               
        }}}

if($query_run){
    echo '<script type="text/javascript"> alert("Data Updated")</script>';
  }
  else{
    echo '<script type="text/javascript"> alert("Data not Updated")</script>';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>TeacherProfile</title>
    <link rel="stylesheet" href="teacherprofile.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="teacher_images/logo.png" width="50px" alt="">

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
                <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ucfirst($_SESSION['email']); ?></span>
              
            </div>
         </div>

         <div class="sidebar-menu">
               
            <ul>
                <li><a href="">
                    <span class="las la-home"></span>Home
                </a></li>
                <li><a href="../Dashboard for teacher/index.html">
                    <span class="las la-tachometer-alt"></span>Dashboard
                </a></li>

                <li><a href="../subjects/mathematics/subjectindex.html">
                    <span class="las la-book"></span>Subjects
                </a></li>

                <li><a href="../mystudents/mystudents.html"><span class="las la-users"></span>My Students</a></li>

                <li><a href="../quiz/quiz.html"><span class="las la-check-circle"></span>Tasks</a>
                </li>
                 
                 <li><a href="../analytics/progressreport.html"><span class="las la-chart-pie"></span>Analytics</a></li>

                 <li><a href="../calendar/calendar.html">
                     <span class="las la-calendar"></span>Calendar
                 </a></li>
                 
                 <li>
                 <a href="../Discussion/discussion.html">
                    <span class="las la-users"></span>Discussion
                </a></li>

                
                <li><a href="../mailbox/mailbox.html"><span class="las la-envelope"></span>Mailbox</a></li>
                

                <li><a href="../finance/finance.html">
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
                           <p id="p1"><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></p>
                           <!-- <p id="p2">Teaher in Royal College</p> -->
                          <a href="#"><p id="p3"><?php echo ($_SESSION['email']); ?></p></a> 

                        
                    </div>
                 
                    <div class="header-actions">
                        <a href="teacher_editprofile.php" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a>

                    </div>
                  
                </div>
                
                <div class="container">
                    <div class="main1">
                        <div class="gr1">
                            <p id="userdetails">User Details</p><br><br>
                            <p id="useremailaddress">User Email Address</p>
                            <a href="#"><p id="email"><?php echo ($_SESSION['email']); ?></p></a><br><br>
                            <p id="country1">NIC</p>
                            <p id="country2">  <?php echo ucfirst($NIC); ?><br><br>
                            <p id="city1">Phone Number</p>
                            <p id="city2"><?php echo ucfirst($mobile); ?></p><br><br>
                        </div>

                        <div class="gr2">
                            <p id="qualifications">User Qualifications</p><br><br>
                            <hr>
                            <a href="#"><?php echo ucfirst($qualification); ?></a><br>
                            <hr>
                            <a href="#">Bachelor of science early childhood development</a><br>
                            <hr>
                            <a href="#">Master of Online MS in Education</a><br>
                            <hr>
                            <a href="#">Master of Administrative side in Education</a><br>
                            <hr>
                            <a href="#">Bachelor of Arts in Education</a><br>
                            <hr>
                            <a href="#">Bachelor of Science Collaborative</a><br>
                            <hr>
                            
                        </div>
                    </div>

                    <div class="main2">
                        <div class="gr3">
                            <p id="coursedetails">Course Details</p><br><br>
                            <div class="row1">
                                <div class="sinhala">
                                    <a id="sin" href="#">Sinahala</a>
                                    <a id="math" href="#">Mathematics</a>
                                    <p id="psin">5 chapters<span id="pmath">10 chapters</span></p>
                                    
                                </div>
                            </div>

                            <div class="row2">
                                <div class="sinhala">
                                    <a id="eng" href="#">English</a>
                                    <a id="aes" href="#">Aesthetic</a>
                                    <p id="peng">5 chapters<span id="paes">10 chapters</span></p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="gr4">
                            <p id="loginactivities">Login Activities</p><br><br>
                            <p id="First">First access to the site  :- 09/17/2021</p><br>
                            <p id="Last">Last access to the site  :- 09/21/2021</p>
                        </div>
                    </div>

                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>