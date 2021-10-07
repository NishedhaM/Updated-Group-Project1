<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:teacher_login.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Teacher's dash board</title>
    <link rel="stylesheet" href="teacher_dashboard.css">
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
                <a href="teacher_profile.php"><img src="teacher_images/teacher2.jpg"  alt=""></a>
                 <div>
                <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div>
         </div>

         <div class="sidebar-menu">
               
                 <ul>
                    <li><a href="">
                        <span class="las la-home"></span>Home
                    </a></li>
                    <li><a href="">
                        <span class="las la-tachometer-alt"></span>Dashboard
                    </a></li>

                    <li><a href="./teacher_subjects/mathematics/grade4/subjectindex.html">
                        <span class="las la-book"></span>Subjects
                    </a></li>

                    <li><a href="./mystudents/mystudents.html"><span class="las la-users"></span>My Students</a></li>

                    <li><a href="./quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
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
                    <div>
                        <h3>
                            Dashboard
                        </h3>
                        <!-- <small>
                            Monitor dfdskfjnsgkjdfkb dfbm 
                        </small> -->
                    </div>
                    
                    <div class="header-actions">
                        <!-- <button>
                            <span class="las la-file-export"></span>Export
                        </button> -->

                        <!-- <button class="setting">
                            <span class="las la-tools"></span>Settings
                        </button> -->
                        <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a>

                    </div>
                </div>
                
                <div class="cards">
                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">

                                
                                <div class="card-head">
                                    <a href="./mystudents/mystudents.html"><span>Students</span></a>
                                    <!-- <small>Number of Purchase</small> -->
                                </div>
                           
                                <h2>100</h2>
                            <!-- <small>2% less purchase</small> -->
                            </div>
                            <div class="cart-chart"><a href=""><span class="las la-angle-double-right" width="3000px"></span></a>
                            </div>
                        </div>
                    </div>
                </span>
                </button>

                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">

                           
                                <div class="card-head">
                                <a href="./teacher_details/teacherdetails.html">
                                    <span>Teachers</span></a>
                                    <!-- <small>Number of Purchase</small> -->
                                </div>
                           
                            <h2>06</h2>
                            <!-- <small>2% less purchase</small> -->
                            </div>
                        <div class="cart-chart"><a href=""><span class="las la-angle-double-right"></span></a>
                        </div>
                        </div>
                    </div>
                </span>
                </button>

                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">

                           
                                <div class="card-head">
                                <a href="./admindetails/admindetails.html">
                                    <span>Admins</span></a>
                                    <!-- <small>Number of Purchase</small> -->
                                </div>
                           
                            <h2>02</h2>
                            <!-- <small>2% less purchase</small> -->
                            </div>
                        <div class="cart-chart"><a href=""><span class="las la-angle-double-right"></span></a>
                        </div>
                        </div>
                    </div>
                    </span>
                    </button>
                    
                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">

                           
                                <div class="card-head">
                                <a href="./teacher_subjects/mathematics/grade4/subjectindex.html">
                                    <span>Subjects</span></a>
                                    <!-- <small>Number of Purchase</small> -->
                                </div>
                           
                                <h2>04</h2>
                                <!-- <small>2% less purchase</small> -->
                            </div>
                        <div class="cart-chart"><a href=""><span class="las la-angle-double-right"></span></a>
                        </div>
                        </div>
                    </div>
                    </span>
                    </button>
                </div>

                <div class="jobs-grid">
                    <div class="analytics-card">
                        <div class="analytics-head">
                                <h2>Completed Details</h2>
                                <span class="las la-ellipsis"></span>
                        </div>

                        <div class="analytics-chart">
                            <div class="chartandbox">
                                <div class="chartsubject">
                                    <select class="box3-subject">
                                        <option value="mathematics">English</option>
                                        <option value="mathematics">Sinhala</option>
                                        <option value="mathematics">Mathematics</option>
                                        <option value="mathematics">Aesthetic</option>   
                                    </select>
                                </div>




                                <div class="chart-circle">
                                    <h1>74%</h1>
                                </div>


                                <div class="gradesubject">
                                    <select class="box3-grade">
                                        <option value="grade1">Grade1</option>
                                        <option value="grade2">Grade2</option>
                                        <option value="grade3">Grade3</option>
                                        <option value="grade4">Grade4</option>   
                                    </select>
                        
                                </div>

                               
                            </div>
                        </div>

                        <div class="analytics-btn"><button>Generate report</button></div>
                    </div>

                    <div class="jobs">
                    <h3>Uploads<small> Recently Updates <span class="las la-arrow-right"></span></small></h3> 
    
                        <div class="table-responsive">
                        <table width="100">
                            <tr>
                                <td><div><span class="indicator even"></span></div>
                                </td>
                                
                                <td><div>Mathematics</div></td>
                                <td><div>Grade 3</div></td>
                                <td><div>Posted two days ago</div></td>
                                <td><div><button>
                                    3 recordings
                                </button></div></td>
                            </tr>

                            <tr>
                                <td><div><span class="indicator even"></span></div></td>
                                <td><div>English</div></td>
                                <td><div>Grade 1</div></td>
                                <td><div>Posted 6 days ago</div></td>
                                <td><div><button>
                                    2 quizes
                                </button></div></td>
                            </tr>

                            <tr>
                                <td><div><span class="indicator even"></span></div></td>
                                <td><div>Mathematics</div></td>
                                <td><div>Grade 3</div></td>
                                <td><div>Posted 6 days ago</div></td>
                                <td><div><button>
                                    1 recording
                                </button></div></td>
                            </tr>

                            <tr>
                                <td><div><span class="indicator even"></span></div></td>
                                <td><div>Sinhala</div></td>
                                <td><div>Grade 1</div></td>
                                <td><div>Posted 6 days ago</div></td>
                                <td><div><button>
                                    1 lesson
                                </button></div></td>
                            </tr>

                        </table>
                    </div>

                    <div class="online-user">
                        <div class="user">
                            <h3>Online Teachers</h3>

                            <div class="teacher-list">
                            <ol>
                                <li><span class="las la-user-circle"></span><a href=" ">K.A.Janul</a><img src="img/speech-bubble.svg">
                                </li>
                                <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumar</a><img src="img/speech-bubble.svg">
                                </li>
                                <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumarvit</a><img src="img/speech-bubble.svg">
                                </li>
                                <li><span class="las la-user-circle"></span><a href=" ">W.A.Kumar<img src="img/speech-bubble.svg"></a>
                                </li>
                                <li><span class="las la-user-circle"></span><a href=" ">K.A.Sanyary<img src="img/speech-bubble.svg"></a>
                                </li>
                                
                            </ol>
                            <i class="fas fa-comment-lines"></i>                   </div>

                            <h3>Online Students</h3>
                            <div class="student-list">
                                <ol>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Janul</a><img src="img/speech-bubble.svg">
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumar</a><img src="img/speech-bubble.svg">
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumarvit</a><img src="img/speech-bubble.svg">
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">W.A.Kumar<img src="img/speech-bubble.svg"></a>
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Sanyary<img src="img/speech-bubble.svg"></a>
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Janul</a><img src="img/speech-bubble.svg">
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumar</a><img src="img/speech-bubble.svg">
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumarvit</a><img src="img/speech-bubble.svg">
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">W.A.Kumar<img src="img/speech-bubble.svg"></a>
                                    </li>
                                    
                                    
                                </ol>
                                </div>
                            
                        </div>
                    </div>
                    </div>
                </div>

               

                <div class="calendarandupdates">
                    <div class="calendar">
                        <div class="month">
                            <ul>
                              <li class="prev">&#10094;</li>
                              <li class="next">&#10095;</li>
                              <li>August<br><span style="font-size:18px">2021</span></li>
                            </ul>
                        </div>

                        <ul class="weekdays">
                            <li>Mo</li>
                            <li>Tu</li>
                            <li>We</li>
                            <li>Th</li>
                            <li>Fr</li>
                            <li>Sa</li>
                            <li>Su</li>
                        </ul>
                          
                        <ul class="days">
                            <div class="firstweek">
                            <li>31</li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                            <li>1</li>
                            <li>2</li>
                            </div>

                            <div class="firstweek">
                                <li>3</li>
                                <li>4</li>
                                <li><span class="active">5</span></li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>9</li>
                                </div>

                            <div class="firstweek">
                                    <li>10</li>
                                    <li>11</li>
                                    <li>12</li>
                                    <li>13</li>
                                    <li>14</li>
                                    <li>15</li>
                                    <li>16</li>
                                    </div>

                            <div class="firstweek">
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                           </div>

                           <div class="firstweek">
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                           </div>

                           <div class="firstweek">
                            <li>31</li>
                           </div>

                            

                            
                        </ul>
                          


                       </div>
                    
                    <div class="jobs">
                    <h3>Upcomming Events<small> Within a month <span class="las la-arrow-right"></span></small></h3> 
    
                        <div class="table-responsive">
                        <table width="100">
                            <tr>
                                <td><div><span class="indicator even"></span></div>
                                </td>
                                
                                <td><div>Mathematics</div></td>
                                <td><div>Grade 3</div></td>
                                <td><div>Progress Report</div></td>
                                <td><div><button>
                                    Start
                                </button></div></td>
                            </tr>

                            <tr>
                                <td><div><span class="indicator even"></span></div></td>
                                <td><div>English</div></td>
                                <td><div>Grade 1</div></td>
                                <td><div>Progress Report</div></td>
                                <td><div><button>
                                    Start
                                </button></div></td>
                            </tr>

                            <tr>
                                <td><div><span class="indicator even"></span></div></td>
                                <td><div>Mathematics</div></td>
                                <td><div>Grade 3</div></td>
                                <td><div>Quiz</div></td>
                                <td><div><button>
                                    Start
                                </button></div></td>
                            </tr>

                            <tr>
                                <td><div><span class="indicator even"></span></div></td>
                                <td><div>Sinhala</div></td>
                                <td><div>Grade 1</div></td>
                                <td><div>Progress Report</div></td>
                                <td><div><button>
                                    Start
                                </button></div></td>
                            </tr>

                        </table>
                    </div>
                    </div>
                </div>

                </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>