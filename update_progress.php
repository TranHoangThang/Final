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
$quiz_id = $_GET['quiz_id']; // Nhận thông tin quiz_id từ phía JavaScript

// Cập nhật tiến trình của người dùng cho bài kiểm tra cụ thể
$sql_update_progress = "INSERT INTO user_quiz_progress (user_id, quiz_id, completed) VALUES (?, ?, 1)
                        ON DUPLICATE KEY UPDATE completed = 1";
$stmt_update_progress = $conn->prepare($sql_update_progress);
$stmt_update_progress->bind_param("ii", $user_id, $quiz_id);
$stmt_update_progress->execute();
$stmt_update_progress->close();

// Đóng kết nối
mysqli_close($conn);
?>