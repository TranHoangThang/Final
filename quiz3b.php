<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz3b.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: #ee8c8d">
      <div class="box">
        <h2>Theme 2 - C, J, St, B: Which is the one you hear?</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
      <div class="Quizzes">
          <div class="Q1 bg1">
            <h1>Car</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q2 bg2">
            <h1>Jar</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q3 bg3" id="Corect1">
            <h1>Stars</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q4 bg4">
            <h1>Bar</h1>
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
        <p>Stars are like giant balls of gas that give off light and heat. 
        They twinkle in the night sky because of the Earth's atmosphere, 
        which causes their light to appear to flicker. Stars are also responsible for creating beautiful constellations, 
        like the Big Dipper or the Orion's Belt, 
        which can help us navigate and tell stories in the night sky.
        </p>
        <a href="quiz3c.php" id="a3" style="color: black;">Next Question</a>
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
    let playSound=() => new Audio("Audio/Star.mp3").play()

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
