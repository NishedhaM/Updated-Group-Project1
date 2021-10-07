<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="child_content.css"/>
  <title>Document</title>
</head>
<body>
  <div class="nav-container">
    <div class="logo">
      <img src="images/logo.jpg" align="right" height="80px" width="80px" >
  </div> 
  <a  href="child_aes.php">
    <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button>
  </a>
   
   
          <nav>

       
            <div class="icon-bar">
              <a class="active" href="#"><img src="images/home.png" height="30px" width="30px"/></a> 
              <a href="#"><img src="images/profile.png" height="30px" width="30px"/></a> 
              <a href="#"><img src="images/notifications.png" height="30px" width="30px"/></a> 
             
            </div>  
          </nav>
          <h1 class="title" align="center"> Favourite Rhymes
          </h1>
          <!-- <p class="second-topic">-- Aesthetic --</p> -->
          <!-- <div class="main">
            <div class="content-list-form">
              <button class="content">
               Johny Johny Yes Papa
              </button>
              <button class="content">
               Johny Johny Yes Papa
              </button><button class="content">
               Johny Johny Yes Papa
              </button>
              <button class="content">
               Johny Johny Yes Papa
              </button>
              <button class="content">
               Johny Johny Yes Papa
              </button>
              <button class="content">
               Johny Johny Yes Papa
              </button>
            </div> 
          
    
          </div>
          <div class="embed-youtube">
            <iframe src="//www.youtube.com/embed/aCOsM-4NEKs" width="750" height="563"></iframe>
        </div>
          -->

          <div class="main">
            <div class="row">
              <div class="col">
                <div class="feature-img">
                  <img src="images/johnny.png" width="100%">
                  <img class="bubbly-button"  onclick="playVideo('images/Clap_Your_Hands_with_Lyrics__Popular_English_Nursery_Rhymes_for_Kids.mp4')">
                ,<div class="text">Play</div>
                </div>
              </div>
              <div class="col">
                <div class="small-img-row">
                  <div class="small-img">
                    <img src="images/im1.png" height="80px" width="120px">
                    <button class="bubbly-button" onclick="playVideo('images/video1.mp4')">Play</button>   </div>
                    <p>Wash your hands, wash your hands <br>
                      Everybody come along and wash your hands!<br>
                      <a href="images/duck.mp4" download>Download Video</a></p>
               
                  
                </div>
                <div class="small-img-row">
                  <div class="small-img">
                    <img src="images/im2.png"height="80px" width="120px" > 
                    <button class="bubbly-button" onclick="playVideo('images/video2.mp4')">Play</button> </div>
                    <p>Here we go round mulberry bush <br>
                      the mulberry bush ,  The mulberry Bush <br>
                      <a href="images/duck.mp4" download>Download  Video</a></p>
                     </p>
                
                  
                </div>
                <div class="small-img-row">
                  <div class="small-img">
                    <img src="images/im4.png"height="80px" width="120px" >
                    <button class="bubbly-button" onclick="playVideo('images/duck.mp4')">Play</button>  </div>
                    <p>It's "THE DUCK DANCE".
                      <br>QUACK!

                      QUACK! QUACK!<br>
                      <a href="images/duck.mp4" download>Download  Video</a></p>
                     
                  
                </div>
                <div class="small-img-row">
                  <div class="small-img">
                    <img src="images/im3.png"height="80px" width="120px" > 
                    <button class="bubbly-button" onclick="playVideo('images/London_Bridge_is_Falling_Down__CoComelon_Nursery_Rhymes_&_Kids_Songs.mp4')">Play</button> </div>
                    <p>London Bridge is falling down <br>
                      Falling down, falling down<br>
                      <a href="images/duck.mp4" download>Download  Video</a></p>
                
                  
                </div>
                <div class="small-img-row">
                  <div class="small-img">
                    <img src="images/humpty.png" height="80px" width="120px">
                    <button class="bubbly-button" onclick="playVideo('images/vid1.mp4')">Play</button>
                  </div>
                    <p>Ten Humpty Dumpty sat on a wall <br>
                      One Humpty Dumpty had a great fall<br>
                      <a href="images/duck.mp4" download>Download  Video</a></p>
               
                  
                </div>
              </div>
            </div>
          </div>
          <div class="video-player" id="videoPlayer">
            <video width="100%" controls autoplay id="myVideo">
              <source src=""
              type="video/mp4">
            </video>
            <img src="images/close.png" class="close-btn" onclick="stopVideo()">
          </div>

          <script>
            var videoPlayer = document.getElementById("videoPlayer");
            var myVideo = document.getElementById("myVideo");

            function stopVideo(){
              videoPlayer.style.display = "none";
            }

            function playVideo(file){
              myVideo.src = file;
              videoPlayer.style.display="block";
            }
                
          </script>
 <br> 

<hr style="color: blue; ">           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>  

        </body>
</html>