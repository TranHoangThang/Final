<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['id'])) {
    echo "Bạn chưa đăng nhập!";
    exit();
}


$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_singup";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

// Lấy thông tin người dùng (đã đăng nhập)
$user_id = $_SESSION['id']; // Thay đổi tùy theo cách bạn lưu thông tin người dùng

// Lấy thông tin khóa học từ URL
$course_id = $_GET['course_id'];

// Kiểm tra xem người dùng đã hoàn thành lớp học này chưa
$check_query = "SELECT * FROM user_progress WHERE user_id = '$user_id' AND course_id = '$course_id'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) == 0) {
    // Chưa có dữ liệu về việc hoàn thành lớp học này, thêm dữ liệu mới
    $completed = 1; // Người dùng đã hoàn thành khóa học

    $insert_query = "INSERT INTO user_progress (user_id, course_id, completed) VALUES ('$user_id', '$course_id', '$completed')";
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        echo "<script>
                alert('Cập nhật tiến độ học tập thành công!');
                window.location.href = 'index1.php';
              </script>";
    } else {
        echo "Có lỗi xảy ra khi cập nhật tiến độ học tập: " . mysqli_error($conn);
    }
} else {
    echo "<script>
            alert('Bạn đã hoàn thành lớp học này rồi!');
            window.location.href = 'index1.php';
          </script>";
}

// Đóng kết nối
mysqli_close($conn);
?>