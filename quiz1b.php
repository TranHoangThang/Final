
<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz1b.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: aqua;">
      <div class="box">
        <h2>Theme 2 Vehicle: Which is the Vehicle out of?</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
      <div class="Quizzes">
          <div class="Q1 bg1" id="Corect1">
            <h1>Airplane</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q2 bg2">
            <h1>Shirt</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q3 bg3">
            <h1>Pants</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q4 bg4">
            <h1>Dress</h1>
          </div>
      </div>
    </div>

    <div class="Q">
      <h1>Which is the odd one out: Airplane, Shirt, Pants, Dress?</h1>
      <a href="Class.php" id="a2">Home</a>
    </div>
  </section>  

  <section id="Result1" style="display:none">
    <div class="Result">
      <div class="R">
        <p>Those white lines that planes leave in the sky are simply trails of condensation, hence their technical name of “contrails.” 
          Plane engines release water vapor as part of the combustion process. 
          When that hot water vapor is pumped out of the exhaust and hits the cooler air of the upper atmosphere, 
          it creates those puffy white lines in the sky.
        </p>
        <a href="quiz1c.php" id="a3" style="color: black;">Next Question</a>
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
