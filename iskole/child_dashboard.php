<?php 
    session_start();
  
    if(!$_SESSION['id']){
        header('location:child_login.php');
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_dashboard.css"/>
    <title>Dashboard</title>
</head>


<body>

<div class="grid-container">
  <div class="sidebar">
  <img src="images/logo.jpg" align="left" height="80px" width="80px">
        
        <br><br><br><br><br><br>
  <a href="child_dashboard.php">Dashboard</a>
  <a href="child_grade.php">My Courses</a>
  <a href="child_quiz1.php">Quiz</a>
  <a href="child_profile.php">Profile</a>
  <a href="#">Calendar</a>
  <a href="#">Payment</a>
  <a href="logout.php?logout=true">Logout</a>
   
  </div>
  <div class="main-content">
  <div class="welcome-bar">
                   <p> 
                   Welcome <?php echo ucfirst($_SESSION['first_name']); ?> to the <small>e-ස්කෝලේ</small>           Learning Course
                   
                    <!-- <p>Dashboard</p> -->
</p>
                </div>
                <div class="nav-container3"> 
            
                    
            <img src="images/exhit.png" height="180px" width="200px" align="right"/>

          <p>Exhibition </p>
          <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">
                  Grades
              </button>
              <div id="myDropdown" class="dropdown-content">
                <a href="#home">Grade 1</a>
                <a href="#home">Grade 2</a>
                <a href="#home">Grade 3</a>
                <a href="#home">Grade 4</a>
                <a href="#home">Grade 5</a>
              </div>
          </div>
            <button class="block">View</button>
        </div>
        
                <div class="jobs">
                    <img src="images/book.png" align="left" height="100px" width="100px">
                    <img src="images/book.png" align="right" height="100px" width="100px">
                    <h3 class="quote1" align="center"><small>You can <br> </small>
                        <font color="#FF2626">L</font>
                        <font color="#cfc815">E</font>
                        <font color="#00ff11">A</font>
                        <font color="#00d5ff">R</font>
                        <font color="#ff00f7">N</font>
                        
           <br>
                        <small>Something new </small><br>
                        
                        <!-- <font color="#FF2626">E</font>
                        <font color="#FF2626">T</font> -->
                        <font color="#12e6e2">E</font>
                        <font color="#ff9305">V</font>
                        <font color="#1428de">E</font>
                        <font color="#ff17f0">R</font>
                        <font color="#87cf15">Y</font>
                        <font color="#d505ff">D</font>
                        <font color="#cf7215">A</font>
                        <font color="#ff0593">Y</font>
                        
                     
                        <br> 
                        <small>If you</small> <br> 
                        <font color="#c4b02f">L</font>
                        <font color="#eb1add">I</font>
                        <font color="#0fabbd">S</font>
                        <font color="#f01f1f">T</font>
                        <font color="#c344e3">E</font>
                        <font color="#3ea612">N</font>
                        
                    </h3>
                    
                 
                </div>
                
  </div>
  <div class="calendarandupdates">
                    <div class="calendar" align="center">
                    “Education <br>is the most powerful weapon <br> which you can use<br> to change the world.” <br><br><small><i>– Nelson Mandela - </small></i>
                      <!-- <img src="cal.png" height="240px" width="380px"> -->
                        <!-- <div class="month">
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
                          
                      
                       </div> -->
                       <div class="nav-container4">  
                    
                    <img src="images/art1.png" height="120px" width="120px" align="left"/>
                   <p>My Drawing Board</p>
                   <button class="block3">Start</button>
                  </div>
                      
                  <div class="nav-container1"> 
                    
                        <div class="rate">
                        <p>Make Yourself Proud</p>
                            <input type="radio" id="star8" name="rate" value="8" />
                            <label for="star8" title="text">8 stars</label>
                            <input type="radio" id="star7" name="rate" value="7" />
                            <label for="star7" title="text">7 stars</label>
                            <input type="radio" id="star6" name="rate" value="6" />
                            <label for="star6" title="text">6 star</label>
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                          </div>
                         
                      </div>
                      <div class="nav-container2"> 
                        <p>A chat area for children <br>
                            <small>now with parental control.</small> </p>
                       
                          <button class="block2">Join</button>
                      </div>
                            
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div> 

</div>
<script>
       /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
   </script> 
</body>
</html> 
