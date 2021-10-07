<?php
session_start();
if(!$_SESSION['id']){
    header('location:teacher_login.php');
}

$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'demo');

if(isset($_POST['send'])){
    $date = date('Y-m-d H:i:s');
     $query="INSERT INTO quiz (qid,q_title)
     VALUES (qid,q_title)";
      $query_run = mysqli_query($connection,$query);
  
      if($query_run){
        echo '<script type="text/javascript"> alert("quiz is done")</script>';
      }
      else{
        echo '<script type="text/javascript"> alert("quiz is not Updated")</script>';
      }
  }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Quiz</title>
    <link rel="stylesheet" href="quiz.css">
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
                <img src="img/teacher2.jpg"  alt="">
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
                <li><a href="../teacher_dashboard.php">
                    <span class="las la-tachometer-alt"></span>Dashboard
                </a></li>

                <li><a href="../teacher_subjects/mathematics/grade4/subjectindex.html">
                    <span class="las la-book"></span>Subjects
                </a></li>

                <li><a href="../mystudents/mystudents.html"><span class="las la-users"></span>My Students</a></li>

                <li><a href="../quiz/quiz.html"><span class="las la-check-circle"></span>Tasks</a>
                </li>
                 
                 <li><a href="../analytics/progressreport.html"><span class="las la-chart-pie"></span>Analytics</a></li>

                 <li><a href="../teacher_calendar/calendar.html">
                     <span class="las la-calendar"></span>Calendar
                 </a></li>
                 
                 <li>
                 <a href="../teacher_discussion/discussion.html">
                    <span class="las la-users"></span>Discussion
                </a></li>

                
                <li><a href="../teacher_mailbox/mailbox.html"><span class="las la-envelope"></span>Mailbox</a></li>
                

                <li><a href="../teacher_finance/finance.html">
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
                    <div>
                        <h3>
                            Quiz<span>Mathematics</span>
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a>

                    </div>
                  
                </div>
                
                <div class="container">

                    <div class="group2">
                        <form action="" method="post">
                        <div class="rec1">
                           
                        <button id="send">Send</button>
                                <input type="text1" placeholder="Untitled Form" name="q_title" id="q_title" required>
                               
                                <input type="text2" placeholder="Quiz no" name="qid" id="qid" required>   
                        </div>
                        <div class="rec2">
                            
                                <input type="text11" placeholder="Question1" name="Question" id="Q1" required>
                                <div class="imgandrecord">
                                    <a href="#"><img src="img/Rectangle 33.png"></a>
                                    <a href="#"><img src="img/Rectangle 38.png"></a>
                                </div>
                                <input type="text12" placeholder="Option1" name="option" id="option1" required>
                                <input type="text13" placeholder="Option2" name="option" id="option2" required>
                                <input type="text14" placeholder="Option2" name="option" id="option3" required>
                                <input type="text15" placeholder="Option2" name="option" id="option4" required>
                           
                            <div class="delete">
                                <a href="#"><img src="img/Rectangle 34.png"></a>
                                
                            </div>
                        </div>
                        <div class="rec3">
                            
                                <input type="text11" placeholder="Question2" name="Question" id="Q2" required>
                                <div class="imgandrecord">
                                    <a href="#"><img src="img/Rectangle 33.png"></a>
                                    <a href="#"><img src="img/Rectangle 38.png"></a>
                                </div>
                                <input type="text12" placeholder="Option1" name="option" id="option21" required>
                                <input type="text13" placeholder="Option2" name="option" id="option22" required>
                                <input type="text14" placeholder="Option2" name="option" id="option23" required>
                                <input type="text15" placeholder="Option2" name="option" id="option24" required>
                          
                            <div class="delete">
                                <a href="#"><img src="img/Rectangle 34.png"></a>
                                
                            </div>
                        </div>
                        <div class="rec4">
                           
                                <input type="text11" placeholder="Question3" name="Question" id="Q3" required>
                                <div class="imgandrecord">
                                    <a href="#"><img src="img/Rectangle 33.png"></a>
                                    <a href="#"><img src="img/Rectangle 38.png"></a>
                                </div>
                                <input type="text12" placeholder="Option1" name="option" id="option31" required>
                                <input type="text13" placeholder="Option2" name="option" id="option32" required>
                                <input type="text14" placeholder="Option2" name="option" id="option33" required>
                                <input type="text15" placeholder="Option2" name="option" id="option34" required>
                          
                            <div class="delete">
                                <a href="#"><img src="img/Rectangle 34.png"></a>
                                
                            </div>
                        </div>
                        <div class="rec5">
                         
                                <input type="text11" placeholder="Question4" name="Question" id="Q4" required>
                                <div class="imgandrecord">
                                    <a href="#"><img src="img/Rectangle 33.png"></a>
                                    <a href="#"><img src="img/Rectangle 38.png"></a>
                                </div>
                                <input type="text12" placeholder="Option1" name="option" id="option41" required>
                                <input type="text13" placeholder="Option2" name="option" id="option42" required>
                                <input type="text14" placeholder="Option2" name="option" id="option43" required>
                                <input type="text15" placeholder="Option2" name="option" id="option44" required>
                          
                            <div class="delete">
                                <a href="#"><img src="img/Rectangle 34.png"></a>
                                
                            </div>
                        </div>
                        <div class="rec6">
                            
                                <input type="text11" placeholder="Question5" name="Question" id="Q5" required>
                                <div class="imgandrecord">
                                    <a href="#"><img src="img/Rectangle 33.png"></a>
                                    <a href="#"><img src="img/Rectangle 38.png"></a>
                                </div>
                                <input type="text12" placeholder="Option1" name="option" id="option51" required>
                                <input type="text13" placeholder="Option2" name="option" id="option52" required>
                                <input type="text14" placeholder="Option2" name="option" id="option53" required>
                                <input type="text15" placeholder="Option2" name="option" id="option54" required>
                            </div>
                            </form>
                            <div class="delete">
                                <a href="#"><img src="img/Rectangle 34.png"></a>
                                
                           
                        </div>


                       
                    </div>  
                    
                    <div class="group1">
                          
                      <div class="green"><div class="subject-list">Subject List</div>
                        <div class="btn-group">
                            <button><p>Mathematics</p></button>
                            <button><p>Sinhala</p></button>
                            <button><p>English</p></button>
                            <button><p>Aesthetic</p></button>
                        </div>
                    </div>
                   
                </div>
                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>