<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz4a.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: #be87e5;">
      <div class="box">
        <h2>Theme 1 - Number: Catch the rainbow! pt.1</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
      <div class="Quizzes">
          <div class="Q1 bg1">
            <h1>4</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q2 bg2" id="Corect1">
            <h1>7</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q3 bg3">
            <h1>5</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q4 bg4">
            <h1>6</h1>
          </div>
      </div>
    </div>
    
    <div class="Q">
      <h1>How many colors are in the rainbow?</h1>
      <a href="Class.php" id="a2">Home</a>
    </div>
  </section>  

  <section id="Result1" style="display:none">
    <div class="Result">
      <div class="R">
        <p>Did you know that rainbows are formed when sunlight passes through raindrops in the air? Each raindrop acts like a tiny prism, 
        bending the sunlight and separating it into different colors. When many raindrops come together, 
        they create a beautiful arc of colors in the sky that we call a rainbow!
        </p>
        <a href="quiz4b.php" id="a3" style="color: black;">Next Question</a>
      </div>
    </div>
  </section>

  <script>
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
