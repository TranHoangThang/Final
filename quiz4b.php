<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz4b.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: #be87e5;">
      <div class="box">
        <h2>Theme 2 - color: Catch the rainbow! pt.2</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
      <div class="Quizzes">
          <div class="Q1 bg1">
            <h1>Red</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q2 bg2">
            <h1>Blue</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q3 bg3">
            <h1>Green</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q4 bg4" id="Corect1">
            <h1>Pink</h1>
          </div>
      </div>
    </div>
    
    <div class="Q">
      <h1>What colors are not in the rainbow?</h1>
      <a href="Class.php" id="a2">Home</a>
    </div>
  </section>  

  <section id="Result1" style="display:none">
    <div class="Result">
      <div class="R">
        <p>The seven colors of the rainbow are red, orange, yellow, green, blue, indigo, and violet. However, 
        some people may associate pink with a rainbow, especially in artistic representations or in popular culture. 
        It's important to note that the perception of colors and the interpretation of a rainbow can vary, 
        so there is some flexibility in how a rainbow is depicted.
        </p>
        <a href="quiz4c.php" id="a3" style="color: black;">Next Question</a>
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
