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
$quiz_id = 1; // Thay đổi tương ứng với quiz (1 cho quiz1d, 2 cho quiz2d, ...)

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

// Xử lý khi người dùng nhấn nút "The End"
if (isset($_POST['end_quiz'])) {
  // Thực hiện lưu tiến trình hoàn thành vào CSDL
  // Gửi yêu cầu cập nhật tiến trình hoàn thành qua Ajax đến update_progress.php
  echo '<script>
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "update_progress.php?quiz_id=1", true); // Thay đổi quiz_id cho từng trang
          xhr.send();
        </script>';
}

// Đóng kết nối
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="quiz1d.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <section id="Question1">
    <div class="Question" style="background-color: aqua;">
      <div class="box">
        <h2>Theme 4 Fruit: Which is the Fruit out of?</h2>
        <a href="Class.php" id="a1">Back</a>
        <a href="#Answer1" id="btn1">Next</a>
      </div>
    </div>
  </section>

  <section id="Answer1" style="display:none">
    <div class="Answer">
      <div class="Quizzes">
          <div class="Q1 bg1">
            <h1>Fox</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q2 bg2">
            <h1>Dog</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q3 bg3" id="Corect1">
            <h1>Coconut</h1>
          </div>
      </div>

      <div class="Quizzes">
          <div class="Q4 bg4">
            <h1>Cat</h1>
          </div>
      </div>
    </div>

    <div class="Q">
      <h1>Which is the odd one out: Fox, Dog, Coconut, Cat?</h1>
      <a href="Class.php" id="a2">Home</a>
    </div>
  </section>  

  <section id="Result1" style="display:none">
    <div class="Result">
      <div class="R">
        <p>Coconuts can be used as bowls or even cups to serve food and drinks out of. 
          Some island bars serve adult tropical beverages out of them. Other restaurants will serve desserts, 
          like frozen sweets, out of them. 
          Using the side of the coconut without the holes can keep the contents from leaking out of the fruit. 
        </p>
        <script>
            document.getElementById("end_quiz_button").addEventListener("click", function() {
            // Xử lý khi người dùng nhấn nút "The End"
            // Gửi yêu cầu cập nhật tiến trình hoàn thành qua Ajax đến update_progress.php
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "update_progress.php?quiz_id=1", true); // Thay đổi quiz_id cho từng trang
            xhr.send();
        });
</script>
        <a href="Class.php" id="end_quiz_button" style="color: black;">The End</a>
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
