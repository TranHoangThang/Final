<?php
session_start();

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_singup";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

// Lấy thông tin người dùng từ session hoặc cookie
$user_id = $_SESSION['id']; // Giả sử bạn đã lưu user_id vào session

// Lấy danh sách các danh mục kiểm tra
$sql = "SELECT DISTINCT category FROM quizzes";
$result = mysqli_query($conn, $sql);
$categories = array();
while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row['category'];
}

// Tính tỷ lệ hoàn thành cho từng danh mục
foreach ($categories as $category) {
    $sql_total = "SELECT COUNT(*) AS total FROM quizzes WHERE category = ?";
    $stmt_total = $conn->prepare($sql_total);
    $stmt_total->bind_param("s", $category);
    $stmt_total->execute();
    $result_total = $stmt_total->get_result();
    $row_total = $result_total->fetch_assoc();
    $total_quizzes = $row_total['total'];
    $stmt_total->close();

    $sql_completed = "SELECT COUNT(*) AS completed FROM user_quiz_progress WHERE user_id = ? AND category = ? AND completed = 1";
    $stmt_completed = $conn->prepare($sql_completed);
    $stmt_completed->bind_param("is", $user_id, $category);
    $stmt_completed->execute();
    $result_completed = $stmt_completed->get_result();
    $row_completed = $result_completed->fetch_assoc();
    $completed_quizzes = $row_completed['completed'];
    $stmt_completed->close();

    // Tính tỷ lệ hoàn thành
    if ($total_quizzes > 0) {
        $completion_percentage = ($completed_quizzes / $total_quizzes) * 100;

        // Cập nhật hoặc thêm tiến độ hoàn thành vào bảng user_quiz_progress
        $sql_update_progress = "INSERT INTO user_quiz_progress (user_id, category, completion_percentage) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE completion_percentage = ?";
        $stmt_update_progress = $conn->prepare($sql_update_progress);
        $stmt_update_progress->bind_param("issd", $user_id, $category, $completion_percentage, $completion_percentage);
        $stmt_update_progress->execute();
        $stmt_update_progress->close();
    }
}

// Đóng kết nối
$conn->close();

// Chuyển hướng người dùng trở lại trang Class.php sau khi tính xong
header("Location: Class.php");
?>
