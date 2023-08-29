
<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz2a.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: springgreen;">
      <div class="box">
        <h2>Theme 1 - Animals: Can you choose the correct answer?</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
        <div class="item1">
          <h1>Question 1: Is a lion a cat (belong to the feline family)?</h1>
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
        <p>Yes, a lion is a member of the cat family. 
          Lions belong to the genus Panthera and the species Panthera leo. 
          They are commonly referred to as "big cats" and are one of the largest species in the Felidae family, 
          which includes domestic cats, tigers, leopards, and jaguars. 
          While they share some physical and behavioral characteristics with domestic cats, 
          lions are much larger and have distinct features such as a mane.
        </p>
        <a href="quiz2b.php" id="a3" style="color: black;">Next Question</a>
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
