<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz4c.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: #be87e5;">
      <div class="box">
        <h2>Theme 3 - Facts: Shoot for the moon! pt.1</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
        <div class="item1">
          <h1>Question 1: Is The Earth bigger Than The Moon?</h1>
          <div class="popup1" style="display: none;">
            <div class="popup-content1">
              <span class="popup-close1" onclick="hidePopup1()">&times;</span>
            </div>
          </div>

          <div class="popup2" style="display: none;">
            <div class="popup-content2">
              <span class="popup-close2" onclick="hidePopup2()">&#10004;</span>
            </div>
          </div>
        </div>

        <div class="item2">
          <button id="No" onclick="showPopup1()">No</button>
        </div>  

        <div class="item3">
          <button id="Yes" onclick="showPopup2()">Yes</button>
        </div>
    </div>
  </section>  

  <section id="Result1" style="display:none">
    <div class="Result">
      <div class="R">
        <p>The Moon is much smaller than the Earth, about 1/6th its size! That means if you stacked six moons together, 
        they would be the same size as the Earth. But even though it's not as big as our planet, the Moon is still pretty special. 
        In fact, it's the fifth largest moon in our entire solar system! 
        It's like a small buddy that travels around the Earth.
        </p>
        <a href="quiz4d.php" id="a3" style="color: black;">Next Question</a>
      </div>
    </div>
  </section>

  <script>
  
    $('#btn1').on('click', function(){
    $('#Question1').hide()
    $('#Answer1').show();});

    function showPopup1() {
    document.querySelector('.popup1').style.display = 'flex';
    setTimeout(function(){
      hidePopup1();}, 2400);
    }
    function hidePopup1() {
    document.querySelector('.popup1').style.display = 'none';
    }

    function showPopup2() {
    document.querySelector('.popup2').style.display = 'flex';
    setTimeout(function(){
      hidePopup2();
      $('#Answer1').hide();
      $('#Result1').show();}, 2400);
    }
    function hidePopup2() {
    document.querySelector('.popup2').style.display = 'none';
    }

    var contextClass = (window.Context || window.webkitContext || window.mozContext || window.oContext || window.msContext);
    var big_red_button1 = document.getElementById("Yes");
    if (contextClass) {
      var context = new contextClass();
    }
    function unpress1() { 
    big_red_button1.classList.remove("pressed1"); 
    }
    function pressed1() {
    big_red_button1.classList.add("pressed1");
    var delay = 2000;
    setTimeout(unpress1,delay);
    }
    big_red_button1.addEventListener('click', function(event) { pressed1(); });

    var big_red_button2 = document.getElementById("No");
    if (contextClass) {
      var context = new contextClass();
    }
    function unpress2() { 
    big_red_button2.classList.remove("pressed2"); 
    }
    function pressed2() {
    big_red_button2.classList.add("pressed2");
    var delay = 2000;
    setTimeout(unpress2,delay);
    }
    big_red_button2.addEventListener('click', function(event) { pressed2(); });
  </script>
</body>
</html>
