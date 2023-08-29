<?php
session_start();

// Kết nối tới CSDL (thay đổi thông tin kết nối nếu cần)
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_singup";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

$user_id = $_SESSION['id'];
$quiz_id = 4; // Thay đổi tương ứng với quiz (1 cho quiz1d, 2 cho quiz2d, ...)

// Kiểm tra xem người dùng đã hoàn thành quiz này chưa
$sql_check_completion = "SELECT completed FROM user_quiz_progress WHERE user_id = ? AND quiz_id = ?";
$stmt_check_completion = $conn->prepare($sql_check_completion);
$stmt_check_completion->bind_param("ii", $user_id, $quiz_id);
$stmt_check_completion->execute();
$stmt_check_completion->bind_result($completed);
$stmt_check_completion->fetch();
$stmt_check_completion->close();

if (!$completed) {
    // Người dùng chưa hoàn thành, cập nhật tiến trình
    $sql_update_progress = "INSERT INTO user_quiz_progress (user_id, quiz_id, completed) VALUES (?, ?, 1)
                            ON DUPLICATE KEY UPDATE completed = 1";
    $stmt_update_progress = $conn->prepare($sql_update_progress);
    $stmt_update_progress->bind_param("ii", $user_id, $quiz_id);
    $stmt_update_progress->execute();
    $stmt_update_progress->close();
}

// Đóng kết nối
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz4d.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: #be87e5;">
      <div class="box">
        <h2>Theme 4 - myth: Shoot for the moon! pt.2</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
        <div class="item1">
          <h1>Question 2: Does a rabbit live on the Moon?</h1>
          <div class="popup1" style="display: none;">
            <div class="popup-content1">
              <span class="popup-close1" onclick="hidePopup1()">&#10004;</span>
            </div>
          </div>

          <div class="popup2" style="display: none;">
            <div class="popup-content2">
              <span class="popup-close2" onclick="hidePopup2()">&times;</span>
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
        <p>The Moon Hare is a folklore character found in various cultures, including Chinese, Japanese, and Korean folklore. 
            According to the myth, a rabbit or hare is believed to be living on the Moon, pounding rice.
            This myth originated from ancient stories that explain the lunar markings as a rabbit or hare. 
            In some versions of the myth, the Moon Hare is said to be a companion to the Moon Goddess.
        </p>
        <script>
            document.getElementById("end_quiz_button").addEventListener("click", function() {
            // Xử lý khi người dùng nhấn nút "The End"
            // Gửi yêu cầu cập nhật tiến trình hoàn thành qua Ajax đến update_progress.php
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "update_progress.php?quiz_id=4", true); // Thay đổi quiz_id cho từng trang
            xhr.send();
            });
        </script>
        <a href="Class.php" id="end_quiz_button" style="color: black;">The End</a>
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
      hidePopup2();
      $('#Answer1').hide();
      $('#Result1').show();}, 2400);
    }
    function hidePopup1() {
    document.querySelector('.popup1').style.display = 'none';
    }

    function showPopup2() {
    document.querySelector('.popup2').style.display = 'flex';
    setTimeout(function(){
      hidePopup1();}, 2400);
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
