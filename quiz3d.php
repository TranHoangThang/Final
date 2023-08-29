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
$quiz_id = 3; // Thay đổi tương ứng với quiz (1 cho quiz1d, 2 cho quiz2d, ...)

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
  <link rel="stylesheet" href="quiz3d.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: #ee8c8d">
      <div class="box">
        <h2>Theme 4 - Fl, Gr, Sn, Gl: Which is the one you hear?</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
      <div class="Quizzes">
          <div class="Q1 bg1">
            <h1>Flow</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q2 bg2">
            <h1>Grow</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q3 bg3" id="Corect1">
            <h1>Snow</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q4 bg4">
            <h1>Glow</h1>
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
        <p>Snow is formed when the temperature in the clouds is below freezing (0 degrees Celsius or 32 degrees Fahrenheit). 
        When the ice crystals come together, they create beautiful snowflakes with six sides. 
        That's why snowflakes often look like delicate, intricate patterns.
        Snow also acts as a great insulator, which means it can help keep things warm. 
        </p>
        <script>
            document.getElementById("end_quiz_button").addEventListener("click", function() {
            // Xử lý khi người dùng nhấn nút "The End"
            // Gửi yêu cầu cập nhật tiến trình hoàn thành qua Ajax đến update_progress.php
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "update_progress.php?quiz_id=3", true); // Thay đổi quiz_id cho từng trang
            xhr.send();
            });
        </script>
        <a href="Class.php" id="end_quiz_button" style="color: black;">The End</a>
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
    let playSound=() => new Audio("Audio/Snow.mp3").play()

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
