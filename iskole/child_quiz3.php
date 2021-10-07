<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_quiz3.css"/>
    <title>Quiz3</title>
</head>
<body>
  <div class="nav-container">
    <div class="logo">
      <img src="images/logo.jpg" align="right" height="80px" width="80px" >
  </div> 
    <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button>
         
          <nav>

       
            <div class="icon-bar">
              <a class="active" href="#"><img src="images/home.png" height="30px" width="30px"/></a> 
              <a href="#"><img src="images/profile.png" height="30px" width="30px"/></a> 
              <a href="#"><img src="images/notifications.png" height="30px" width="30px"/></a> 
             
            </div>  
          </nav>
    
      
      <h1 class="title" align="center">Quiz-Verbs</h1>
  
    <nav>
       
      <a href="child_quiz1.php"><input type="button" class="button2" value="Grade"></a>
      <a href="child_quiz2.php"> <input type="button" class="button2" value="Chapter"></a>
     
      <input type="button" class="button2 active1" value="Question">
      <input type="button" class="button2" value="Score">
      
      
  </nav>
  </div>
  <div class="qa_box">
    <div class="qa_header">
      <span>
        Score: <span id="score">0</span>
      </span>
      <span id="countdown">0</span>
    </div>
    <div class="qa_body">
      <div class="qa_set active">
         <h4>1.Which is the ACTION VERB in the sentence?<br>
          The dog chewed the toy into little pieces.</h4>
          <div class="qa_ans_row">
            <input type="radio" name="a1">
            <span>
              dog
            </span>
          </div>
          <div class="qa_ans_row">
            <input type="radio" name="a1">
            <span>
              toy
            </span>
          </div>
          <div class="qa_ans_row">
            <input type="radio" name="a1" valid="valid">
            <span>
              chewed
            </span>
          
          </div>
         
          
        </div>

          <div class="qa_set ">
            <h4>2.Which word best fits in the blank?<br>
              .............. a loud noise when the singer comes out on stage.</h4>
             <div class="qa_ans_row">
               <input type="radio" name="a2">
               <span>
                 Do
               </span>
             </div>
             <div class="qa_ans_row">
               <input type="radio" name="a2" valid="valid">
               <span>
                Make
               </span>
             </div>

             
          </div>


             <div class="qa_set ">
              <h4>3.What tense is the verb?<br>
                My brother broke my new phone.</h4>
               <div class="qa_ans_row">
                 <input type="radio" name="a3" valid="valid">
                 <span>
                  past tense
                 </span>
               </div>
               <div class="qa_ans_row">
                 <input type="radio" name="a3" >
                 <span>
                  present tense
                 </span>
               </div>
               <div class="qa_ans_row">
                <input type="radio" name="a3" >
                <span>
                 future tense
                </span>
              </div>

             
            </div>
              <div class="qa_set ">
                <h4>4.Select the option which identifies the verb in the sentence.<br>
                  Turn to your right</h4>
                 <div class="qa_ans_row">
                   <input type="radio" name="a4" valid="valid">
                   <span>
                    Turn
                   </span>
                 </div>
                 <div class="qa_ans_row">
                   <input type="radio" name="a4" >
                   <span>
                   Right
                   </span>
                 </div>
                 <div class="qa_ans_row">
                  <input type="radio" name="a4" >
                  <span>
                   Your
                  </span>
                </div>
              
              </div>

                <div class="qa_set ">
                  <h4>5.That is my hat! Don't ___________ it.</h4>
                   <div class="qa_ans_row">
                     <input type="radio" name="a3" >
                     <span>
                      listen
                     </span>
                   </div>
                   <div class="qa_ans_row">
                     <input type="radio" name="a3" valid="valid">
                     <span>
                     wear
                     </span>
                   </div>
                   <div class="qa_ans_row">
                    <input type="radio" name="a3" >
                    <span>
                     draw
                    </span>
                  </div>
                </div>
                 
                
                  <div class="qa_set">
                    <h4>Your Total Score is<span id="totalScore" align="center">0 </span> out of 100</h4>
                  </div>
                </div>
                  <div class="qa_footer">
                    <span class="btn2" id="skip">Skip</span>
                  </div>
               </div>
               <br>  <br>
            <hr style="color: blue; ">           
   <div class="footer-main">
   
    <div class="footer">
     
      <footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
    </div> 
   </div>           
       
    

 <script>
 var skip = document.getElementById('skip');
 var score = document.getElementById('score');
 var totalScore = document.getElementById('totalScore');
 var countdown = document.getElementById('countdown');
 var count = 0;
 var scoreCount = 0;
 var duration = 0;
 var qaSet = document.querySelectorAll('.qa_set');
 var qaAnsRow = document.querySelectorAll('.qa_set .qa_ans_row input');

skip.addEventListener('click',function(){
    step()
    duration = 10;
})

qaAnsRow.forEach(function(qaAnsRowSingle){
    qaAnsRowSingle.addEventListener('click',function (){
      setTimeout(function(){
          step();
          duration = 10;
      },500)  

      var valid = this.getAttribute("valid");
      if(valid=="valid"){
        scoreCount +=20;
        score.innerHTML = scoreCount;
        totalScore.innerHTML = scoreCount;
      }else{
        scoreCount =20;
        score.innerHTML = scoreCount;
        totalScore.innerHTML = scoreCount;
      }
    })
});

 function step(){
     count +=1;
     for(var i=0;i<qaSet.length; i++){
         qaSet[i].className='qa_set';
     }
     qaSet[count].className='qa_set active';
     if(count==5){
         skip.style.display='none';
         clearInterval(durationTime);
         countdown.innerHTML=0;

     }
 }

 var durationTime = setInterval(function(){
     if(duration==10){
        duration = 0;
     }
     duration +=1;
     countdown.innerHTML=duration;
     if(countdown.innerHTML == "10"){
         step()
     }
 },1000);
  </script> 















































    <!-- <div class="nav-container">
        <div class="logo">
          <img src="logo.jpg" align="right" height="80px" width="80px" >
      </div> 
        <button class="btn1"><img src="back.png" height="80px" width="60px">  </button>
             
              <nav>
  
           
                <div class="icon-bar">
                  <a class="active" href="#"><img src="home.png" height="30px" width="30px"/></a> 
                  <a href="#"><img src="profile.png" height="30px" width="30px"/></a> 
                  <a href="#"><img src="notifications.png" height="30px" width="30px"/></a> 
                 
                </div>  
              </nav>
        
          
          <h1 class="title" align="center">Verbs</h1>
      
        <nav>
           
          <input type="button" class="button" value="Grade">
          <input type="button" class="button" value="Chapter">
          <input type="button" class="button active" value="Question">
          <input type="button" class="button" value="Score">
          <input type="button" class="button" value="Help">
          
      </nav>
      <div class="chapterNames">
        
      </div>
     

      <div class="quiz-container">
        <div class="quiz">
        </div>
        <button id="previous">Previous Question</button>
        <button id="next">Next Question</button>
        <button id="submit">Submit Quiz</button>
        <div id="results"></div>
      </div>
      <script>
        const numb = document.querySelector(".numb");
        let counter = 0;
        setInterval(()=>{
          if(counter == 100){
            clearInterval();
          }else{
            counter+=1;
            numb.textContent = counter + "%";
          }
        }, 80);
     </script>
    </div> -->
    
</body>
</html>