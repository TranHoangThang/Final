<?php
    session_start();

    // Kết nối tới CSDL
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login_singup";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong;");
    }

    // Lấy thông tin người dùng (đã đăng nhập)
    $user_id = $_SESSION['id'];

    // Truy vấn cơ sở dữ liệu để lấy thông tin tiến trình học tập của người dùng
    $query = "SELECT COUNT(*) as completed_courses FROM user_progress WHERE user_id = '$user_id' AND completed = 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $completed_courses = $row['completed_courses'];
    } else {
        $completed_courses = 0;
    }

    // Tính toán phần trăm tiến trình học tập
    $total_courses = 2; // Tổng số khóa học
    $progress_percent = ($completed_courses / $total_courses) * 100;

    // Đóng kết nối
    mysqli_close($conn);
?>
<?php

    // Kết nối tới CSDL
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login_singup";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong;");
    }

    // Lấy thông tin người dùng (đã đăng nhập)
    $user_id = $_SESSION['id'];

    // Truy vấn cơ sở dữ liệu để lấy thông tin tiến trình hoàn thành của người dùng
    $query = "SELECT COUNT(*) as completed_quizzes FROM user_quiz_progress WHERE user_id = '$user_id' AND completed = 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $completed_quizzes = $row['completed_quizzes'];
    } else {
        $completed_quizzes = 0;
    }

    // Tính toán phần trăm tiến trình hoàn thành
    $total_quizzes = 4; // Tổng số bài kiểm tra
    $custom_progress = ($completed_quizzes / $total_quizzes) * 100;

    // Đóng kết nối
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar</title>
    <style>
        .progress-container {
            width: 100%;
            background-color: #f0f0f0;
        }

        .progress-bar {
            width: <?php echo $custom_progress; ?>%;
            height: 30px;
            background-color: #4caf50;
            text-align: center;
            line-height: 30px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        h2{
            Background-color: gray;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Your Learning Completion Progress</h1>
    <h2><?php echo $progress_percent; ?>%</h2>
    <h1>Your Quizzes Completion Progress</h1>
    <div class="progress-container">
        <div class="progress-bar">
            <?php echo $custom_progress; ?>%
        </div>
    </div>
</body>
</html>