<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz3c.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: #ee8c8d">
      <div class="box">
        <h2>Theme 3 - G, Fr, Fl, A: Which is the one you hear?</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
      <div class="Quizzes">
          <div class="Q1 bg1" id="Corect1">
            <h1>Game</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q2 bg2">
            <h1>Frame</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q3 bg3">
            <h1>flame</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q4 bg4">
            <h1>Aim</h1>
          </div>
      </div>
    </div>
    
    <div class="Q">
      <h1>Can you guess which is the correct objects/subjects using sound?
        <div class="container">
          <label>
            <input type="checkbox" class="play-btn" id="playBtn" onclick="playSound()"/>
            <div class="play-icon"></div>
            <div class="pause-icon"></div>
          </label>
        </div>
      </h1>
      <a href="Class.php" id="a2">Home</a>
    </div>
  </section>  

  <section id="Result1" style="display:none">
    <div class="Result">
      <div class="R">
        <p>Playing games is not only fun, but it can also be good for your brain! When you play games, 
        your brain gets a workout and helps you develop important skills. For example, 
        strategy games can help improve problem-solving and critical thinking skills. 
        Puzzle games can help improve memory and concentration. 
        And team-based games can teach you cooperation and communication skills.
        </p>
        <a href="quiz3d.php" id="a3" style="color: black;">Next Question</a>
      </div>
    </div>
  </section>

  <script>
    const playBtn = document.getElementById("playBtn");
    playBtn.addEventListener("change", function() {
      if (this.checked) {
        setTimeout(function() {
          playBtn.checked = false;
        }, 3000);
      }
    });
    let playSound=() => new Audio("Audio/Game.mp3").play()

    $('.Q1').on({click: function(){$(this).addClass('new-bg1').removeClass('bg1')},
    mousedown: function() {},
    mouseup: function() {},
    mouseenter: function() {},
    mouseleave: function() {}})
    $('.Q2').on({click: function(){$(this).addClass('new-bg2').removeClass('bg2')},
    mousedown: function() {},
    mouseup: function() {},
    mouseenter: function() {},
    mouseleave: function() {}})
    $('.Q3').on({click: function(){$(this).addClass('new-bg3').removeClass('bg3')},
    mousedown: function() {},
    mouseup: function() {},
    mouseenter: function() {},
    mouseleave: function() {}})
    $('.Q4').on({click: function(){$(this).addClass('new-bg4').removeClass('bg4')},
    mousedown: function() {},
    mouseup: function() {},
    mouseenter: function() {},
    mouseleave: function() {}})
    $('#btn1').on('click', function(){
    $('#Question1').hide()
    $('#Answer1').show();});
    $('#Corect1').on('click', function(){
    $('#Answer1').hide()
    $('#Result1').show();});
  </script>
</body>
</html>
