<?php
    session_start();
    // Kiểm tra nếu có parameter "completed" trong URL và nó có giá trị "true"
    if (isset($_GET['completed']) && $_GET['completed'] === 'true') {
        $_SESSION['class_one_completed'] = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="class1.css">
    <title>Child English</title>
    <script>
        function showButton() {
            var hideButton2 = document.getElementById('hideButton2');
            if (hideButton2) {
                hideButton2.style.display = 'block';
            }
        }

        // Kiểm tra xem nút "Hoàn thành lớp 2" đã được kích hoạt hay chưa khi trang tải
        window.addEventListener('DOMContentLoaded', function() {
            var completedClassTwo = localStorage.getItem('completed_class_two');
            if (completedClassTwo === 'true') {
                showButton();
            }
        });
    </script>
        <script>
        function showButton1() {
            var hideButton = document.getElementById('hideButton');
            if (hideButton) {
                hideButton.style.display = 'block';
            }
        }

        // Kiểm tra xem nút "Hoàn thành lớp 1" đã được kích hoạt hay chưa khi trang tải
        window.addEventListener('DOMContentLoaded', function() {
            var completedClassOne = localStorage.getItem('completed_class_one');
            if (completedClassOne === 'true') {
                showButton1();
            }
        });
    </script>
</head>
<body>
    <div class="section">
        <div class="title">
            <h1> Class </h1>
        </div>
        <div class="choosen">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <h2>Class One </h2>
                <p>Learning about animals helps you to know many interesting things</p>
                <a href="index2.php" class="button" >On Click</a>
                <a href="mark_completed.php?course_id=1" id="hideButton" class="button" onclick="showButton1()" style="margin-top: 20px; display: none;">Hoàn thành lớp 1</a>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <h2>Class Two</h2>
                <p>Learning about objects helps you to know more about their uses</p>
                <a href="index22.php" class="button">On Click</a>
                <a href="mark_completed_class_two.php" id="hideButton2" class="button" onclick="showButton()" style="margin-top: 20px; display: none;">Hoàn thành lớp 2</a>
                </div>
            </div>
        </div>
    </div>
    <nav id="navbar">
        <a href="user.php"><i style= font-size:100%  class="fa-solid fa-user"></i></a>
        <a href="index1.php"><i class="fas fa-briefcase"></i></a>
        <a href="Class.php"><i class="far fa-file"></i></a>
        <a href="progesslevel2.php"><i class="far fa-address-card"></i></a>
      </nav>
</body>
</html>